<div>
  <div class="addthis-toggler" style="cursor:pointer;"></div>
  <div class="addthis-share-buttons">
     <!-- AddThis Button BEGIN -->
     <div class="addthis_toolbox addthis_default_style"
             addthis:url="<?php print url('node/' . $node->nid, array('absolute' => TRUE)); ?>"
             addthis:title="<?php print $node->title; ?>"
      >
        <a class="addthis_button_email"></a>
        <a class="addthis_button_tweet"></a>
        <a class="addthis_button_linkedin_counter"></a>
        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
        <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
     </div>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50c6523c7d4bc6d5"></script>
    <!-- AddThis Button END -->
  </div>
</div>