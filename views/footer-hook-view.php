<script>
    var symptoma_mode = 'CORONA';
    var symptoma_integration = 'banner';
    var symptoma_banner_title = '<?=_e("BANNER_TITLE", SYMPTOMA_COVID19_SLUG)?>';
    var symptoma_banner_subtitle = '<?=_e("BANNER_SUBTITLE", SYMPTOMA_COVID19_SLUG)?>';
    var symptoma_banner_link_text = '<?=_e("BANNER_LINK_TEXT", SYMPTOMA_COVID19_SLUG)?>';
    var symptoma_banner_link_url = '<?=_e("BANNER_LINK_URL", SYMPTOMA_COVID19_SLUG)?>';
    var script = document.createElement('script');
    script.setAttribute('type', 'text/javascript');
    script.setAttribute('src', 'https://www.symptoma.net/en/embed.js');
    document.currentScript.parentNode.insertBefore(script, document.currentScript.parentNode.nextSibling);
</script>