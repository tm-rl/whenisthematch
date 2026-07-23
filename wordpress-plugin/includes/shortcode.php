<?php

if (!defined('ABSPATH')) {
    exit;
}


function witm_widget_shortcode($atts) {

    $atts = shortcode_atts(
        array(
            'team' => '',
            'lang' => 'en',
            'branding' => 'false'
        ),
        $atts,
        'whenisthematch'
    );


    if (empty($atts['team'])) {
        return '';
    }


    $team = sanitize_title($atts['team']);
    $lang = sanitize_key($atts['lang']);
    $branding = filter_var($atts['branding'], FILTER_VALIDATE_BOOLEAN);

    $lang_prefix = '';
    if (!empty($lang) && $lang !== 'en') {
        $lang_prefix = '/' . $lang;
    }

    $src = sprintf(
        'https://whenisthematch.com%s/embed/team/%s',
        $lang_prefix,
        $team
    );

    ob_start();
    ?>
    <iframe
        class="witm-widget"
        src="<?php echo esc_url($src); ?>"
        width="100%"
        frameborder="0"
        scrolling="no"
        style="border:none;overflow:hidden;">
    </iframe>

    <?php if ($branding): ?>
        <div style="text-align: right; font-size:12px; margin-top: -4px;">
            <a
                href="https://whenisthematch.com<?php echo esc_attr($lang_prefix); ?>"
                target="_blank"
                rel="noopener"
                style="display:inline-flex;align-items:center;gap:6px;color:#555;text-decoration:none;"
            >
                <img
                    src="https://whenisthematch.com/favicon.svg"
                    alt="WhenIsTheMatch"
                    style="height:16px;width:auto;"
                />

                <span>WhenIsTheMatch</span>

            </a>
        </div>
    <?php endif; ?>

    <?php

    return ob_get_clean();
}


add_shortcode(
    'whenisthematch',
    'witm_widget_shortcode'
);