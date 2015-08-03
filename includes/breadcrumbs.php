<?php 
/**
 * I've added some modification and HTML schema compatibility 
 *
 * @package Radix
 * @link http://www.dezzain.com/wordpress-tutorials/add-seo-schemas-breadcrumbs/
 * @since Radix 1.0
 */

/**
     Radix Breadcrumbs
**/

function Radix_breadcrumb() {
    global $post;
    
    //schema link
    $schema_link = esc_url( 'http://data-vocabulary.org/Breadcrumb' );
    $home = '<i class="fa fa-home"></i>';
    $delimiter = ' \ ';
    $home_link = esc_url( home_url( '/' ) );
    $before = '<span class="current" itemprop="title">';
    $after = '</span>';

    if (is_front_page()) {
    // no need for breadcrumbs in homepage
    }

    elseif (is_home()) {
        $title = get_option('page_for_posts') ? get_the_title(get_option('page_for_posts')) : __('Blog', 'radix');
        echo '<div id="breadcrumbs"><a href="' . $home_link . '">' . $home . '</a> \ ' . $title . '</div>';
    } 

    else {
        echo '<div id="breadcrumbs">';
        // main breadcrumbs lead to homepage
        echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . $home_link . '">' . '<span itemprop="title">' . $home . '</span>' . '</a></span>' . $delimiter . ' ';
        // if blog page exists
        if (get_page_by_path('blog')) {
            if (!is_page()) {
                echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_permalink(get_page_by_path('blog')) . '">' . '<span itemprop="title">Blog</span></a></span>' . $delimiter . ' ';
            }
        }
        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                $category_link = get_category_link($thisCat->parent);
                echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . $category_link . '">' . '<span itemprop="title">' . get_cat_name($thisCat->parent) . '</span>' . '</a></span>' . $delimiter . ' ';
            }
            $category_id = get_cat_ID(single_cat_title('', false));
            $category_link = get_category_link($category_id);
            echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . $category_link . '"></a>' . '<span itemprop="title">' . __('Archive by category: "', 'radix') . single_cat_title('', false) . '"</span>' . '</span>';
        }

        elseif (is_search()) {
            echo __('Search results for: "', 'radix') . get_search_query() . __('"', 'radix');
        }

        elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . $home_link . '/' . $slug['slug'] . '">' . '<span itemprop="title">' . $post_type->labels->singular_name . '</span>' . '</a></span>';
                echo ' ' . $delimiter . ' ' . get_the_title();
            }
            else {
                $category = get_the_category();
                if ($category) {
                    foreach ($category as $cat) {
                        echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_category_link($cat->term_id) . '">' . '<span itemprop="title">' . $cat->name . '</span>' . '</a></span>' . $delimiter . ' ';
                    }
                }
                echo get_the_title();
            }
        }
        elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $post_type->labels->singular_name;
        }
        elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
            echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_permalink($parent) . '">' . '<span itemprop="title">' . $parent->post_title . '</span>' . '</a></span>';
            echo ' ' . $delimiter . ' ' . get_the_title();
        }
        elseif (is_page() && !$post->post_parent) {
            $get_post_slug = $post->post_name;
            $post_slug = str_replace('-', ' ', $get_post_slug);
            echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_permalink() . '">' . '<span itemprop="title">' . ucfirst($post_slug) . '</span>' . '</a></span>';
        }
        elseif (is_page() && $post->post_parent) {
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_permalink($page->ID) . '">' . '<span itemprop="title">' . get_the_title($page->ID) . '</span>' . '</a></span>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo $breadcrumbs[$i];
                if ($i != count($breadcrumbs) - 1)
                    echo ' ' . $delimiter . ' ';
            }
            echo $delimiter . '<span itemscope itemtype="' . $schema_link . '"><span class="current" itemprop="title">' . the_title_attribute('echo=0') . '</span></span>';
        }
        elseif (is_tag()) {
            $tag_id = get_term_by('name', single_cat_title('', false), 'post_tag');
            if ($tag_id) {
                $tag_link = get_tag_link($tag_id->term_id);
            }
            echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . $tag_link . '"></a><span itemprop="title">' . __('Posts tagged: "', 'radix') . single_tag_title('', false) . '"</span>' . '</span>';
        }
        elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_author_posts_url($userdata->ID) . '"></a><span itemprop="title">' . __('Author', 'radix') . ': "' . $userdata->display_name . '"</span>' . '</span>';
        }
        elseif (is_404()) {
            echo  __('Error 404', 'radix');
        }

        elseif (is_day()) {
            echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_year_link(get_the_time('Y')) . '">' . '<span itemprop="title">' . get_the_time('Y') . '</span>' . '</a></span>' . $delimiter . ' ';
            echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . '<span itemprop="title">' . get_the_time('F') . '</span>' . '</a></span>' . $delimiter . ' ';
            echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')) . '">' . '<span itemprop="title">' . get_the_time('d') . '</span>' . '</a></span>';
        }
        elseif (is_month()) {
            echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_year_link(get_the_time('Y')) . '">' . '<span itemprop="title">' . get_the_time('Y') . '</span>' . '</a></span>' . $delimiter . ' ';
            echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . '<span itemprop="title">' . get_the_time('F') . '</span>' . '</a></span>';
        }
        elseif (is_year()) {
            echo '<span itemscope itemtype="' . $schema_link . '"><a itemprop="url" href="' . get_year_link(get_the_time('Y')) . '">' . '<span itemprop="title">' . get_the_time('Y') . '</span>' . '</a></span>';
        }
        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
                echo ' (';
                    echo __('Page', 'radix') . ' ' . get_query_var('paged');
                    if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
                        echo ')';
        }
        echo '</div>';
    }
}


/**
     Radix Page title
**/

function Radix_page_title() {
    $page_title = get_option('page_for_posts') ? __('Blog', 'radix') : get_the_title(get_option('page_for_posts')) ;
    $current_category = single_cat_title('', false);
    
    if (is_home()) {
        echo '<h2 class="sub-header-title" itemprop="headline">' . $page_title . ' </h2>';
    } elseif (is_category()) {
        echo '<h2 class="sub-header-title" itemprop="headline">' . $current_category . ' </h2>';
    } elseif (is_search()) {
        echo '<h2 class="sub-header-title" itemprop="headline">' . __('Search', 'radix') . ' </h2>';
    } else {
        echo '<h2 class="sub-header-title" itemprop="headline">' . get_the_title() . ' </h2>';
    }  
} 

