<?php
/**
 * Filter widget
 *
 * special class names are required on the isotope items
 * {terms_slug}_{term_slug}
 * @example In the category terms, term is "featured item"
 *  category_featured_item
 *
 * @param string $filter_by_title Appears in widget title
 * @param string $filter_by_slug  Term slug to pull tags form
 */

/*** Bail if no title or slug */
if ( !$filter_by_title || !$filter_by_slug ) { return; }

?>
<div class="panel panel-default">
  <div class="panel-heading">
    Filter by <?php echo $filter_by_title; ?>
  </div>
  <div class="panel-body">
    <ul id="filters">
      <li><a href="#" data-filter="*">All</a></li>
      <?php foreach( get_terms($filter_by_slug) as $term ): ?>
        <li><a href="#" data-filter=".<?php echo $filter_by_slug.'_'.$term->slug; ?>"><?php echo $term->name; ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
