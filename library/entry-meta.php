<?php
/**
 * Entry meta information for posts
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
	function foundationpress_entry_meta() {
		echo '<a class="byline author" href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">Written by: ' . get_the_author() . '</a>';
	}
endif;


if ( ! function_exists( 'foundationpress_entry_meta_full' ) ) :
	function foundationpress_entry_meta_full() {
    echo get_avatar( get_the_author_meta('user_email'), $size = '150');
    echo '<div class="author-details">' . get_the_author() .'
    <p class="author-bio">' . get_the_author_meta('description') . '</p><a class="read-more" href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">Read more posts by ' . get_the_author() . '</a></div>';
	}
endif;

if ( ! function_exists( 'foundationpress_entry_meta_no_read_more' ) ) :
	function foundationpress_entry_meta_no_read_more() {
    echo get_avatar( get_the_author_meta('user_email'), $size = '150');
    echo '<div class="author-details">' . get_the_author() .'
    <p class="author-bio">' . get_the_author_meta('description') . '</p></div>';
	}
endif;

if ( ! function_exists( 'foundationpress_entry_date' ) ) :
	function foundationpress_entry_date() {
		/* translators: %1$s: current date */
		$content = '';
		$content .= '<time class="updated" datetime="' . get_the_time( 'c' ) . '">';
		$content .= '<span class="time-month">' . sprintf( __( '%1$s', 'foundationpress' ), get_the_date( 'M' ) ) . '</span>';
		$content .= '<span class="time-date">' . sprintf( __( '%1$s', 'foundationpress' ), get_the_date( 'j' ) ) . '</span>';

		if ( is_single() ):
			$content .= '<span class="time-year">' . sprintf( __( '%1$s', 'foundationpress' ), get_the_date( 'Y' ) ) . '</span>';
		endif;

		$content .= '</time>';

		echo $content;
	}
endif;
