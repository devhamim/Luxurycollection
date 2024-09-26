<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if($setting->first()->title != null): ?>
        <title><?php echo e($setting->first()->title); ?></title>
    <?php endif; ?>
    <?php if($setting->first()->favicon != null): ?>
    <link rel="shortcut icon" href="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->first()->favicon); ?>">
<?php endif; ?>

    <meta name='robots' content='max-image-preview:large' />

    <link href='<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/client/blocks/cart-frontend14ac.js?ver=1c5ebcb58df698a17253'
        as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/vendor/lodash.mind1d1.js?ver=4.17.21' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/vendor/react.mincb06.js?ver=18.3.1' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/client/blocks/blocks-checkoutb753.js?ver=5980872eb77817dd6b18'
        as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/vendor/react-dom.mincb06.js?ver=18.3.1' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/client/blocks/blocks-components263c.js?ver=211abb6906805368a551'
        as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks-dataf3db.js?ver=3b21c127321dcdffaeba'
        as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks-registry8d1b.js?ver=1c879273bd5c193cad0a'
        as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/data.min1020.js?ver=7c62e39de0308c73d50c' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/vendor/react-jsx-runtime.mincb06.js?ver=18.3.1' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/compose.min3ffd.js?ver=b8d54449305350b51869' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/deprecated.min0a8b.js?ver=e1f84915c5e8ae38964c' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/hooks.min2757.js?ver=2810c76e705dd1a53b18' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/dom.mindad4.js?ver=4ecffbffba91b10c5c7a' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/element.min1596.js?ver=cb762d190aebbec25b27' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/escape-html.min3a9d.js?ver=6561a406d2d232a6fbd2' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/is-shallow-equal.mincb09.js?ver=e0f9f1d78d83f5196979' as='script'
        rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/keycodes.min8cc0.js?ver=034ff647a54b018581d3' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/priority-queue.minc7db.js?ver=9c21c957c7e50ffdbf48' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/private-apis.min0e58.js?ver=17a2e640b653d742da6e' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/redux-routine.mineef5.js?ver=a0a172871afaeb261566' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/client/blocks/wc-settings8edc.js?ver=07c2f0675ddd247d2325'
        as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/api-fetch.min803c.js?ver=4c185334c5ec26e149cc' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/url.mind2d7.js?ver=36ae0e4dd9043bb8749b' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/client/blocks/wc-typesee62.js?ver=bda84b1be3361607d04a'
        as='script' rel='prefetch' />


    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/autop.min33af.js?ver=9fb50649848277dd318d' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/plugins.minb4a0.js?ver=ef6da4a9b2747b62c09c' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/style-engine.mind8b7.js?ver=86ba6721a03e5b921dfe' as='script'
        rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-includes/js/dist/wordcount.min9ebf.js?ver=55d8c2bf3dc99e7ea5ec' as='script' rel='prefetch' />
    <link href='<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/client/blocks/checkout-frontendf80c.js?ver=d7549457c5d1658f35f3'
        as='script' rel='prefetch' />

    <link rel='stylesheet' id='CF_block-cartflows-style-css-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/cartflows/modules/gutenberg/build/style-blocksffdc.css?ver=2.0.9' media='all' />
    <link rel='stylesheet' id='CFP_block-cfp-style-css-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/cartflows-pro/modules/gutenberg/build/style-blocks1717.css?ver=2.0.6'
        media='all' />
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-family--inter: "Inter", sans-serif;
            --wp--preset--font-family--cardo: Cardo;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='chaty-front-css-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/chaty/css/chaty-front.min9bd7.css?ver=3.2.91723568819' media='all' />
    <link rel='stylesheet' id='select2-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/css/select24615.css?ver=9.1.4' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/css/woocommerce-layout4615.css?ver=9.1.4' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen4615.css?ver=9.1.4'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/css/woocommerce4615.css?ver=9.1.4' media='all' />

    <link rel='stylesheet' id='elementor-frontend-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/elementor/assets/css/frontend-lite.mind5d5.css?ver=3.23.4' media='all' />
    <link rel='stylesheet' id='elementor-post-17-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/uploads/elementor/css/post-1723c9.css?ver=1723565956' media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/elementor-pro/assets/css/frontend-lite.min28fc.css?ver=3.23.3' media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/uploads/elementor/css/global23c9.css?ver=1723565956' media='all' />
    <link rel='stylesheet' id='elementor-post-15-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/uploads/elementor/css/post-156120.css?ver=1723572013' media='all' />
    <link rel='stylesheet' id='wcf-normalize-frontend-global-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/cartflows/assets/css/cartflows-normalizeffdc.css?ver=2.0.9' media='all' />
    <link rel='stylesheet' id='wcf-frontend-global-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/cartflows/assets/css/frontendffdc.css?ver=2.0.9' media='all' />
    <link rel='stylesheet' id='wcf-pro-frontend-global-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/cartflows-pro/assets/css/frontend1717.css?ver=2.0.6' media='all' />
    <link rel='stylesheet' id='wcf-checkout-template-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/cartflows/assets/css/checkout-templateffdc.css?ver=2.0.9' media='all' />
    <link rel='stylesheet' id='wcf-pro-checkout-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/cartflows-pro/assets/css/checkout-styles1717.css?ver=2.0.6' media='all' />
    <link rel='stylesheet' id='wcf-pro-multistep-checkout-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/cartflows-pro/assets/css/multistep-checkout1717.css?ver=2.0.6' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='<?php echo e(asset('landing')); ?>/wp-includes/css/dashicons.minb6a4.css?ver=6.6.1'
        media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHind+Siliguri%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CAnek+Bangla%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.6.1'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="<?php echo e(asset('landing')); ?>/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minb152.js?ver=2.7.0-wc.9.1.4"
        id="jquery-blockui-js" defer data-wp-strategy="defer"></script>

    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min4615.js?ver=9.1.4" id="wc-add-to-cart-js"
        defer data-wp-strategy="defer"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.mine3ee.js?ver=1.0.9-wc.9.1.4"
        id="selectWoo-js" defer data-wp-strategy="defer"></script>

    <script src="<?php echo e(asset('landing')); ?>/wp-includes/js/zxcvbn-async.min5152.js?ver=1.0" id="zxcvbn-async-js"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-includes/js/dist/hooks.min2757.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>

    <script src="wp-admin/js/password-strength-meter.minb6a4.js?ver=6.6.1" id="password-strength-meter-js"></script>

    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/js/frontend/checkout.min4615.js?ver=9.1.4" id="wc-checkout-js" defer
        data-wp-strategy="defer"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/pixelyoursite-pro/dist/scripts/js.cookie-2.1.3.min4c71.js?ver=2.1.3"
        id="js-cookie-pys-js"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/pixelyoursite-pro/dist/scripts/jquery.bind-first-0.2.3.minb6a4.js?ver=6.6.1"
        id="jquery-bind-first-js"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/pixelyoursite-pro/dist/scripts/sha25657c3.js?ver=0.11.0" id="js-sha256-js"></script>

    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/pixelyoursite-pro/dist/scripts/public6c3b.js?ver=10.4.1" id="pys-js"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min8dc3.js?ver=1.4.1-wc.9.1.4"
        id="jquery-cookie-js" data-wp-strategy="defer"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/cartflows/assets/js/frontendffdc.js?ver=2.0.9" id="wcf-frontend-global-js"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/cartflows-pro/assets/js/frontend1717.js?ver=2.0.6" id="wcf-pro-frontend-global-js">
    </script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/cartflows-pro/assets/js/analytics1717.js?ver=2.0.6" id="wcf-pro-analytics-global-js">
    </script>
<link rel="stylesheet" href="<?php echo e(asset('landing/slick.css')); ?>">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <style id='wp-fonts-local'>
        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300 900;
            font-display: fallback;
            src: url('<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt%2cwght.woff2') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
        }
    </style>
    <!-- Meta Pixel Code -->
    <?php if($markatingsetting->first()->fb_pixel != null): ?>
        <?php echo $markatingsetting->first()->fb_pixel; ?>

    <?php endif; ?>
    

    <!-- googletag Code -->
    <?php if($markatingsetting->first()->google_tag != null): ?>
        <?php echo $markatingsetting->first()->google_tag; ?>

    <?php endif; ?>
    <!-- Google Tag Manager -->
</head>

<body
    class="home cartflows_step-template cartflows_step-template-cartflows-canvas page page-id-15 theme-hello-elementor woocommerce-checkout woocommerce-page woocommerce-no-js cartflows-2.0.9  cartflows-pro-2.0.6 elementor-default elementor-kit-17 elementor-page elementor-page-15 cartflows-canvas">


    <div class="cartflows-container">

        <div data-elementor-type="wp-post" data-elementor-id="15" class="elementor elementor-15"
            data-elementor-post-type="cartflows_step">
            <div class="elementor-element elementor-element-4c13540 e-flex e-con-boxed e-con e-parent"
                data-id="4c13540" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-537f646 elementor-widget elementor-widget-image"
                        data-id="537f646" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.23.0 - 05-08-2024 */
                                .elementor-widget-image {
                                    text-align: center
                                }

                                .elementor-widget-image a {
                                    display: inline-block
                                }

                                .elementor-widget-image a img[src$=".svg"] {
                                    width: 48px
                                }

                                .elementor-widget-image img {
                                    vertical-align: middle;
                                    display: inline-block
                                }
                            </style>
                            <?php if($setting->first()->black_logo != null): ?>
                                <img fetchpriority="high" decoding="async" width="600" height="600"
                                src="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->first()->black_logo); ?>"
                                class="attachment-large size-large wp-image-520" alt=""sizes="(max-width: 600px) 100vw, 600px" />
                            <?php else: ?>
                                <img fetchpriority="high" decoding="async" width="600" height="600"
                                src="<?php echo e(asset('uploads/setting')); ?>/<?php echo e($setting->first()->white_logo); ?>"
                                class="attachment-large size-large wp-image-520" alt=""sizes="(max-width: 600px) 100vw, 600px" />
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-9afcb1f e-flex e-con-boxed e-con e-parent"
                data-id="9afcb1f" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-1fb4b37 elementor-widget elementor-widget-heading"
                        data-id="1fb4b37" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.23.0 - 05-08-2024 */
                                .elementor-heading-title {
                                    padding: 0;
                                    margin: 0;
                                    line-height: 1
                                }

                                .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                    color: inherit;
                                    font-size: inherit;
                                    line-height: inherit
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                    font-size: 15px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                    font-size: 19px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                    font-size: 29px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                    font-size: 39px
                                }

                                .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                    font-size: 59px
                                }
                            </style>
                            <h2 class="elementor-heading-title elementor-size-default">প্রিয় মানুষকে মনের মতো সাজিয়ে নিন এই সুন্দর ড্রেস টি গিফট দিয়ে।​</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-ff8a742 e-flex e-con-boxed e-con e-parent"
                data-id="ff8a742" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-4d1bc1a elementor-widget elementor-widget-heading"
                        data-id="4d1bc1a" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">এই ফটোতে দেখানো ড্রেসটি যেমন দেখছেন </br>হুবহো এটিই পাবেন</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-3fa34cd elementor-widget elementor-widget-image">
                        <div class="elementor-image-carousel-wrapper swiper">
                            <div class="imageautoplay">
                                <?php $__currentLoopData = $products_gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($gallery->gallery_number == 1): ?>
                                    <img decoding="async" width="800" height="1354" src="<?php echo e(asset('uploads/product/gallery')); ?>/<?php echo e($gallery->image); ?>" class="attachment-full size-full wp-image-563" alt="" sizes="(max-width: 800px) 100vw, 800px" />
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-b016a6c e-flex e-con-boxed e-con e-parent"
                data-id="b016a6c" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-74c735e elementor-widget elementor-widget-heading"
                        data-id="74c735e" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default"><?php echo e($products->name); ?></h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-76e0cfa elementor-widget elementor-widget-image"
                        data-id="76e0cfa" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <?php $__currentLoopData = $products_gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($gallery->gallery_number == 2): ?>
                                        <figure class="swiper-slide-inner">
                                            <img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('uploads/product/gallery')); ?>/<?php echo e($gallery->image); ?>" />
                                        </figure>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-1adccf7 e-flex e-con-boxed e-con e-parent"
                data-id="1adccf7" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-5dcd00f elementor-widget__width-initial elementor-widget-mobile__width-initial elementor-widget elementor-widget-text-editor"
                        data-id="5dcd00f" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.23.0 - 05-08-2024 */
                                .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                    background-color: #69727d;
                                    color: #fff
                                }

                                .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                    color: #69727d;
                                    border: 3px solid;
                                    background-color: transparent
                                }

                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                    margin-top: 8px
                                }

                                .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                    width: 1em;
                                    height: 1em
                                }

                                .elementor-widget-text-editor .elementor-drop-cap {
                                    float: left;
                                    text-align: center;
                                    line-height: 1;
                                    font-size: 50px
                                }

                                .elementor-widget-text-editor .elementor-drop-cap-letter {
                                    display: inline-block
                                }
                            </style>
                            <p>বাজারের কপি ড্রেসের সঙ্গে আমাদের প্রোডাক্ট কে তুলনা করবেন না। আমরা নিজস্ব তত্ত্বাবধানে
                                ইসলামপুরে আমাদের নিজস্ব ফ্যাক্টরিতে মেনুফ্যাকচারিং করে থাকি। কারন আমরা সম্পূর্ণ কাপড়
                                নিজেরা প্রস্তুত করি কাপড়ের ওড়না ও পায়জামার কাপড় সম্পূর্ণ সুতি কাপড়।</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-b14013e e-flex e-con-boxed e-con e-parent"
                data-id="b14013e" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-0453e9d elementor-align-center elementor-widget elementor-widget-button"
                        data-id="0453e9d" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-pulse-grow"
                                    href="#66">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-icon">
                                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-shopping-bag"
                                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M352 160v-32C352 57.42 294.579 0 224 0 153.42 0 96 57.42 96 128v32H0v272c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V160h-96zm-192-32c0-35.29 28.71-64 64-64s64 28.71 64 64v32H160v-32zm160 120c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zm-192 0c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24z">
                                                </path>
                                            </svg> </span>
                                        <span class="elementor-button-text"> অর্ডার করুন</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-0e23ed7 e-flex e-con-boxed e-con e-parent"
                data-id="0e23ed7" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-3f2d197 elementor-widget elementor-widget-heading"
                        data-id="3f2d197" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">আকর্ষণীয় ছাড়ে পাচ্ছেন সীমিত
                                সময়ের জন্য!</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-9e51059 e-flex e-con-boxed e-con e-parent"
                data-id="9e51059" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-3e7fa55 elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel"
                        data-id="3e7fa55" data-element_type="widget"
                        data-settings="{&quot;slides_to_show&quot;:&quot;4&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;dots&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;autoplay_speed&quot;:2000,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                        data-widget_type="image-carousel.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.23.0 - 05-08-2024 */
                                .elementor-widget-image-carousel .swiper,
                                .elementor-widget-image-carousel .swiper-container {
                                    position: static
                                }

                                .elementor-widget-image-carousel .swiper-container .swiper-slide figure,
                                .elementor-widget-image-carousel .swiper .swiper-slide figure {
                                    line-height: inherit
                                }

                                .elementor-widget-image-carousel .swiper-slide {
                                    text-align: center
                                }

                                .elementor-image-carousel-wrapper:not(.swiper-container-initialized):not(.swiper-initialized) .swiper-slide {
                                    max-width: calc(100% / var(--e-image-carousel-slides-to-show, 3))
                                }
                            </style>
                            <div class="elementor-image-carousel-wrapper swiper" dir="ltr">
                                <div class="elementor-image-carousel swiper-wrapper" aria-live="off">
                                    <?php $__currentLoopData = $products_gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($gallery->gallery_number == 3): ?>
                                            <div class="swiper-slide" role="group" aria-roledescription="slide">
                                            <figure class="swiper-slide-inner">
                                                <img decoding="async" class="swiper-slide-image" src="<?php echo e(asset('uploads/product/gallery')); ?>/<?php echo e($gallery->image); ?>"
                                                    alt="C-1" /></figure>
                                        </div>
                                            <figure class="swiper-slide-inner">

                                            </figure>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-3ed9bd6 e-flex e-con-boxed e-con e-parent"
                data-id="3ed9bd6" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-38feef0 e-con-full e-flex e-con e-child"
                        data-id="38feef0" data-element_type="container">
                        <div class="elementor-element elementor-element-3c14b27 elementor-widget elementor-widget-heading"
                            data-id="3c14b27" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">নিচের বাটনে ক্লিক করে এখনই
                                    অর্ডার করুন
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2c2f085 elementor-align-center elementor-widget elementor-widget-button"
                            data-id="2c2f085" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-pulse-grow"
                                        href="#66">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-icon">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-shopping-bag"
                                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M352 160v-32C352 57.42 294.579 0 224 0 153.42 0 96 57.42 96 128v32H0v272c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V160h-96zm-192-32c0-35.29 28.71-64 64-64s64 28.71 64 64v32H160v-32zm160 120c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zm-192 0c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24z">
                                                    </path>
                                                </svg> </span>
                                            <span class="elementor-button-text"> অর্ডার করুন</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2c2f085 elementor-align-center elementor-widget elementor-widget-button"
                            data-id="2c2f085" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <?php if($setting->first()->number_two != null): ?>
                                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-pulse-grow"
                                            href="https://api.whatsapp.com/send?phone=88<?php echo e($setting->first()->number_two); ?>&text=Hello%20there,%20I%20found%20you%20on%20website!%20i%20would%20like%20to%20talk%20about%20your%20Product." target="_blank" style="background: #33D422">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon elementor-align-icon-left">
                                                    <img style="width: 30px" src="<?php echo e(asset('landingpage/sharee/whatsapp.png')); ?>" alt="">
                                                    <span
                                                        class="elementor-button-text"><?php echo e($setting->first()->number_two); ?></span>
                                                </span>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-ca60246 e-flex e-con-boxed e-con e-parent"
                data-id="ca60246" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-28246aa elementor-widget elementor-widget-heading"
                        data-id="28246aa" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default"><?php echo e($products->name); ?> এর বৈশিষ্ট্য</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-80e7aa0 e-flex e-con-boxed e-con e-parent"
                data-id="80e7aa0" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;waves&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-shape elementor-shape-bottom" data-negative="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                            <path class="elementor-shape-fill" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
 c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
 c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z" />
                        </svg>
                    </div>
                    <div class="elementor-element elementor-element-5e70179f elementor-mobile-align-left elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                        data-id="5e70179f" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <?php echo $products->description; ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-d846dac e-flex e-con-boxed e-con e-parent"
                data-id="d846dac" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-4d12bc4 e-con-full e-flex e-con e-child"
                        data-id="4d12bc4" data-element_type="container">
                        <div class="elementor-element elementor-element-cc1f638 elementor-widget elementor-widget-heading"
                            data-id="cc1f638" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default"><a
                                        href="#66">পূর্বমূল্য <?php echo e($products->showdiscount); ?> টাকা
                                    </a></h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a3e1e8c elementor-align-center elementor-widget elementor-widget-button"
                            data-id="a3e1e8c" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-sm"
                                        href="#66">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">অফার মূল্য <?php echo e($products->showprice); ?> টাকা</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2aa465f elementor-widget elementor-widget-heading"
                            data-id="2aa465f" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">ডেলিভারি চার্জ ফ্রি

                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-173d8a4 elementor-align-center elementor-widget elementor-widget-button"
                            data-id="173d8a4" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-pulse-grow"
                                        href="#66">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text"><?php echo e($products->showprice); ?> টাকা</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-d7bb69b e-flex e-con-boxed e-con e-parent"
                data-id="d7bb69b" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-2728c5d e-con-full e-flex e-con e-child"
                        data-id="2728c5d" data-element_type="container">
                        <div class="elementor-element elementor-element-a81d10b elementor-widget elementor-widget-heading"
                            data-id="a81d10b" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">নিচের বাটনে ক্লিক করে এখনই
                                    অর্ডার করুন
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-66c16fd elementor-align-center elementor-widget elementor-widget-button"
                            data-id="66c16fd" data-element_type="widget" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-pulse-grow"
                                        href="#66">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-icon">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-shopping-bag"
                                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M352 160v-32C352 57.42 294.579 0 224 0 153.42 0 96 57.42 96 128v32H0v272c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V160h-96zm-192-32c0-35.29 28.71-64 64-64s64 28.71 64 64v32H160v-32zm160 120c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zm-192 0c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24z">
                                                    </path>
                                                </svg> </span>
                                            <span class="elementor-button-text"> অর্ডার করুন</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-c2010e9 e-flex e-con-boxed e-con e-parent"
                data-id="c2010e9" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-d916f4a elementor-widget elementor-widget-heading"
                        data-id="d916f4a" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">নিচের প্রশ্নগুলো আমরা প্রতিনিয়ত
                                পেয়ে থাকি
                            </h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-216a0d6 elementor-widget elementor-widget-accordion"
                        data-id="216a0d6" data-element_type="widget" data-widget_type="accordion.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.23.0 - 05-08-2024 */
                                .elementor-accordion {
                                    text-align: start
                                }

                                .elementor-accordion .elementor-accordion-item {
                                    border: 1px solid #d5d8dc
                                }

                                .elementor-accordion .elementor-accordion-item+.elementor-accordion-item {
                                    border-top: none
                                }

                                .elementor-accordion .elementor-tab-title {
                                    margin: 0;
                                    padding: 15px 20px;
                                    font-weight: 700;
                                    line-height: 1;
                                    cursor: pointer;
                                    outline: none
                                }

                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon {
                                    display: inline-block;
                                    width: 1.5em
                                }

                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon svg {
                                    width: 1em;
                                    height: 1em
                                }

                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon.elementor-accordion-icon-right {
                                    float: right;
                                    text-align: right
                                }

                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon.elementor-accordion-icon-left {
                                    float: left;
                                    text-align: left
                                }

                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon .elementor-accordion-icon-closed {
                                    display: block
                                }

                                .elementor-accordion .elementor-tab-title .elementor-accordion-icon .elementor-accordion-icon-opened,
                                .elementor-accordion .elementor-tab-title.elementor-active .elementor-accordion-icon-closed {
                                    display: none
                                }

                                .elementor-accordion .elementor-tab-title.elementor-active .elementor-accordion-icon-opened {
                                    display: block
                                }

                                .elementor-accordion .elementor-tab-content {
                                    display: none;
                                    padding: 15px 20px;
                                    border-top: 1px solid #d5d8dc
                                }

                                @media (max-width:767px) {
                                    .elementor-accordion .elementor-tab-title {
                                        padding: 12px 15px
                                    }

                                    .elementor-accordion .elementor-tab-title .elementor-accordion-icon {
                                        width: 1.2em
                                    }

                                    .elementor-accordion .elementor-tab-content {
                                        padding: 7px 15px
                                    }
                                }

                                .e-con-inner>.elementor-widget-accordion,
                                .e-con>.elementor-widget-accordion {
                                    width: var(--container-widget-width);
                                    --flex-grow: var(--container-widget-flex-grow)
                                }
                            </style>
                            <div class="elementor-accordion">
                                <div class="elementor-accordion-item">
                                    <div id="elementor-tab-title-3501" class="elementor-tab-title" data-tab="1"
                                        role="button" aria-controls="elementor-tab-content-3501"
                                        aria-expanded="false">
                                        <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                            aria-hidden="true">
                                            <span class="elementor-accordion-icon-closed"><svg
                                                    class="e-font-icon-svg e-fas-angle-down" viewBox="0 0 320 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z">
                                                    </path>
                                                </svg></span>
                                            <span class="elementor-accordion-icon-opened"><svg
                                                    class="e-font-icon-svg e-fas-angle-up" viewBox="0 0 320 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z">
                                                    </path>
                                                </svg></span>
                                        </span>
                                        <a class="elementor-accordion-title" tabindex="0">অর্ডার করবো কিভাবে?</a>
                                    </div>
                                    <div id="elementor-tab-content-3501"
                                        class="elementor-tab-content elementor-clearfix" data-tab="1"
                                        role="region" aria-labelledby="elementor-tab-title-3501">
                                        <p>অর্ডার করতে আপনার নাম, ঠিকানা, ফোন নাম্বার লিখে নিচের ফর্মটি পূরণ করুন।</p>
                                    </div>
                                </div>
                                <div class="elementor-accordion-item">
                                    <div id="elementor-tab-title-3502" class="elementor-tab-title" data-tab="2"
                                        role="button" aria-controls="elementor-tab-content-3502"
                                        aria-expanded="false">
                                        <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                            aria-hidden="true">
                                            <span class="elementor-accordion-icon-closed"><svg
                                                    class="e-font-icon-svg e-fas-angle-down" viewBox="0 0 320 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z">
                                                    </path>
                                                </svg></span>
                                            <span class="elementor-accordion-icon-opened"><svg
                                                    class="e-font-icon-svg e-fas-angle-up" viewBox="0 0 320 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z">
                                                    </path>
                                                </svg></span>
                                        </span>
                                        <a class="elementor-accordion-title" tabindex="0">ডেলিভারি পাবো কিভাবে?</a>
                                    </div>
                                    <div id="elementor-tab-content-3502"
                                        class="elementor-tab-content elementor-clearfix" data-tab="2"
                                        role="region" aria-labelledby="elementor-tab-title-3502">
                                        <p>ঢাকার ভিতরে ২৪ ঘন্টা এবং ঢাকার বাইরে ৭২ ঘণ্টার মধ্যে হোম ডেলিভারি পাবেন।
                                            প্রোডাক্ট হাতে পেয়ে ডেলিভারি ম্যান এর কাছে প্রোডাক্ট এর দাম পরিশোধ করবেন।
                                        </p>
                                    </div>
                                </div>
                                <div class="elementor-accordion-item">
                                    <div id="elementor-tab-title-3503" class="elementor-tab-title" data-tab="3"
                                        role="button" aria-controls="elementor-tab-content-3503"
                                        aria-expanded="false">
                                        <span class="elementor-accordion-icon elementor-accordion-icon-left"
                                            aria-hidden="true">
                                            <span class="elementor-accordion-icon-closed"><svg
                                                    class="e-font-icon-svg e-fas-angle-down" viewBox="0 0 320 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z">
                                                    </path>
                                                </svg></span>
                                            <span class="elementor-accordion-icon-opened"><svg
                                                    class="e-font-icon-svg e-fas-angle-up" viewBox="0 0 320 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z">
                                                    </path>
                                                </svg></span>
                                        </span>
                                        <a class="elementor-accordion-title" tabindex="0">অগ্রিম টাকা নেয়া হয়?</a>
                                    </div>
                                    <div id="elementor-tab-content-3503"
                                        class="elementor-tab-content elementor-clearfix" data-tab="3"
                                        role="region" aria-labelledby="elementor-tab-title-3503">
                                        <p>না, কোনো রকম অগ্রিম টাকা নেয়া হয় না</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-48a8bbe5 e-flex e-con-boxed e-con e-parent"
                data-id="48a8bbe5" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-6461fc3d e-con-full e-flex e-con e-child"
                        data-id="6461fc3d" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-element elementor-element-323a2272 elementor-widget elementor-widget-heading"
                            data-id="323a2272" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">অর্ডার করার জন্য নিচের
                                    ফর্মটি পূরণ করুন
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-3df8d653 e-con-full e-flex e-con e-parent"
                data-id="3df8d653" data-element_type="container">
                <div class="elementor-element elementor-element-422561e2 e-con-full e-flex e-con e-child"
                    data-id="422561e2" data-element_type="container" id="66">
                    <div class="elementor-element elementor-element-1a42d2d9 elementor-widget elementor-widget-checkout-form"
                        data-id="1a42d2d9" data-element_type="widget" data-widget_type="checkout-form.default">
                        <div class="elementor-widget-container">
                            <div class = "wcf-el-checkout-form cartflows-elementor__checkout-form">
                                <div id="wcf-embed-checkout-form"
                                    class="wcf-embed-checkout-form wcf-embed-checkout-form-two-column  wcf-field-default">
                                    <!-- CHECKOUT SHORTCODE -->

                                    <div class="woocommerce">
                                        <div class="woocommerce-notices-wrapper"></div>
                                        <div class="woocommerce-notices-wrapper"></div>
                                            <form action="<?php echo e(route('fashion.order.store')); ?>" method="POST" class="checkout woocommerce-checkout">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="product_id" value="<?php echo e($products->id); ?>">
                                                <?php if($products->inventorie_id != null): ?>
                                                    <?php if($products->rel_to_inventorie): ?>
                                                        <?php
                                                            $inventorie = $products->rel_to_inventorie
                                                        ?>
                                                        <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <input type="hidden" name="attribute_id" value="<?php echo e($attribute->id); ?>">
                                                            <input type="hidden" name="inventory_id" value="<?php echo e($attribute->inventorie_id); ?>">
                                                            <?php if($attribute->sell_price != null): ?>
                                                                <input type="hidden" name="price" value="<?php echo e($attribute->sell_price); ?>">
                                                            <?php else: ?>
                                                                <input type="hidden" id="product_price" name="price" value="<?php echo e($attribute->price); ?>">
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                <?php else: ?>
                                                    <?php if($products->sell_price != null): ?>
                                                        <input type="hidden" id="product_price" name="price" value="<?php echo e($products->sell_price); ?>">
                                                    <?php else: ?>
                                                        <input type="hidden" id="product_price" name="price" value="<?php echo e($products->price); ?>">
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <div
                                                class="wcf-product-option-wrap wcf-yp-skin-cards wcf-product-option-before-customer">
                                                <h3 id="your_products_heading"> Your Products </h3>
                                                <div class="wcf-qty-options">
                                                    <div class="wcf-qty-row wcf-qty-row-317 ">

                                                        <div class="wcf-item">
                                                            <div class="wcf-item-selector wcf-item-single-sel">
                                                                <?php if($products->inventorie_id != null): ?>
                                                                    <?php if($products->rel_to_inventorie): ?>
                                                                        <?php
                                                                            $inventorie = $products->rel_to_inventorie
                                                                        ?>
                                                                        <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if($attribute->sell_price != null): ?>
                                                                                <input class="wcf-single-sel" type="radio" id="product_1" name="radio_btn" value="1" data-product-name="<?php echo e($products->name); ?>" data-quantity="1" data-price="<?php echo e($attribute->sell_price); ?>" data-image="" checked="checked">
                                                                            <?php else: ?>
                                                                                <input class="wcf-single-sel" type="radio" id="product_1" name="radio_btn" value="1" data-product-name="<?php echo e($products->name); ?>" data-quantity="1" data-price="<?php echo e($attribute->price); ?>" data-image="" checked="checked">
                                                                            <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php endif; ?>
                                                                <?php else: ?>
                                                                    <?php if($products->sell_price != null): ?>
                                                                        <input class="wcf-single-sel" type="radio" id="product_1" name="radio_btn" value="1" data-product-name="<?php echo e($products->name); ?>" data-quantity="1" data-price="<?php echo e($products->sell_price); ?>" data-image="" checked="checked">
                                                                    <?php else: ?>
                                                                        <input class="wcf-single-sel" type="radio" id="product_1" name="radio_btn" value="1" data-product-name="<?php echo e($products->name); ?>" data-quantity="1" data-price="<?php echo e($products->price); ?>" data-image="" checked="checked">
                                                                    <?php endif; ?>
                                                                <?php endif; ?>

                                                            </div>

                                                            <div class="wcf-item-image" style="">
                                                                <?php if($products->inventorie_id != null): ?>
                                                                    <?php if($products->rel_to_inventorie): ?>
                                                                        <?php
                                                                            $inventorie = $products->rel_to_inventorie
                                                                        ?>
                                                                        <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <img fetchpriority="high" decoding="async" width="300" height="300" src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($attribute->image); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php endif; ?>
                                                                <?php else: ?>
                                                                    <img fetchpriority="high" decoding="async" width="300" height="300" src="<?php echo e(asset('uploads/product')); ?>/<?php echo e($product->image); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" />
                                                                <?php endif; ?>

                                                            </div>
                                                            <div class="wcf-item-content-options">
                                                                <div class="wcf-item-wrap">
                                                                    <span class="wcf-display-title"><?php echo e($products->name); ?></span><span
                                                                        class="wcf-display-title-quantity"><span
                                                                            class="dashicons dashicons-no-alt"></span><span
                                                                            class="wcf-display-quantity">1</span></span>
                                                                </div>

                                                                <div class="wcf-qty  wcf-qty-hidden">
                                                                    <div class="wcf-qty-selection-wrap">
                                                                        <span
                                                                            class="wcf-qty-selection-btn wcf-qty-decrement wcf-qty-change-icon"
                                                                            title="">&minus;</span>
                                                                            <input type="number" id="quantity" value="1" step="1" min="1" name="quantity" class="wcf-qty-selection" placeholder="1">
                                                                        <span
                                                                            class="wcf-qty-selection-btn wcf-qty-increment wcf-qty-change-icon"
                                                                            title="">&plus;</span>
                                                                    </div>
                                                                </div>
                                                                <div class="wcf-price">
                                                                    <div class="wcf-display-price wcf-field-label">
                                                                        <?php if($products->inventorie_id != null): ?>
                                                                            <?php if($products->rel_to_inventorie): ?>
                                                                                <?php
                                                                                    $inventorie = $products->rel_to_inventorie
                                                                                ?>
                                                                                <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <?php if($attribute->sell_price != null): ?>
                                                                                        <label for="product_1" id="subtotal"><?php echo e($attribute->sell_price); ?>৳</label>
                                                                                    <?php else: ?>
                                                                                        <label for="product_1" id="subtotal"><?php echo e($attribute->price); ?>৳</label>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php endif; ?>
                                                                        <?php else: ?>
                                                                            <?php if($products->sell_price != null): ?>
                                                                                <label for="product_1" id="subtotal"><?php echo e($products->sell_price); ?>৳</label>
                                                                            <?php else: ?>
                                                                                <label for="product_1" id="subtotal"><?php echo e($products->price); ?>৳</label>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="my-2">
                                                <h2>পছন্দের কালারটি সিলেক্ট করুন  *</h2>
                                            </div>
                                            <div class="woocommerce-input-wrapper">
                                                <?php
                                                    $landingColor = $products->landingcolor;
                                                    $colorsArray = explode(',', $landingColor);
                                                ?>
                                                <?php $__currentLoopData = $colorsArray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl=>$color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <label>
                                                        <input type="checkbox" <?php echo e($sl == 0? 'checked':''); ?> name="color[]" value="<?php echo e($color); ?>" >
                                                        <?php echo e($color); ?>

                                                    </label>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <div class="wcf-col2-set col2-set" id="customer_details">
                                                <div class="wcf-col-1 col-1">
                                                    <wc-order-attribution-inputs></wc-order-attribution-inputs>
                                                    <div class="woocommerce-billing-fields">

                                                        <h3 id="billing_fields_heading">Billing details</h3>

                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                            <p class="form-row form-row-first wcf-column-100 validate-required"
                                                                id="billing_first_name_field" data-priority="10">
                                                                <label for="billing_first_name" class="">আপনার
                                                                    পুরো নাম&nbsp;<abbr class="required"
                                                                        title="required">*</abbr></label><span
                                                                    class="woocommerce-input-wrapper">
                                                                    <input type="text" class="input-text " name="name" id="name"  value="" autocomplete="given-name" required />
                                                                    </span></p>
                                                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                        <strong class="text-danger"><?php echo e($message); ?></strong>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            <p class="form-row form-row-wide address-field wcf-column-100 validate-required"
                                                                id="billing_address_1_field" data-priority="50"><label
                                                                    for="billing_address_1" class="">আপনার
                                                                    সম্পূর্ণ ঠিকানা&nbsp;<abbr class="required"
                                                                        title="required">*</abbr></label><span
                                                                    class="woocommerce-input-wrapper">
                                                                    <input type="text" class="input-text " name="address" id="address"  value="" autocomplete="address-line1" required />
                                                                </span></p>
                                                                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <strong class="text-danger"><?php echo e($message); ?></strong>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                            <p class="form-row form-row-wide wcf-column-100 validate-required validate-phone"
                                                                id="billing_phone_field" data-priority="100"><label
                                                                    for="billing_phone" class="">আপনার মোবাইল
                                                                    নাম্বার&nbsp;<abbr class="required"
                                                                        title="required">*</abbr></label><span
                                                                    class="woocommerce-input-wrapper">
                                                                    <input type="tel" class="input-text " name="mobile" id="mobile" value="" autocomplete="tel" required />
                                                                    </span></p>
                                                                <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <strong class="text-danger"><?php echo e($message); ?></strong>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <script>
                                                                        Swal.fire({
                                                                            icon: "error",
                                                                            title: "Oops...",
                                                                            text: "Something went wrong!",
                                                                        });
                                                                    </script>
                                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="wcf-col-2 col-2">

                                                    <div class="woocommerce-shipping-fields">
                                                    </div>
                                                    <div class="woocommerce-additional-fields">


                                                        <input type="hidden" class="input-hidden _wcf_flow_id"
                                                            name="_wcf_flow_id" value="13"><input type="hidden"
                                                            class="input-hidden _wcf_checkout_id"
                                                            name="_wcf_checkout_id" value="15">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class='wcf-order-wrap'>



                                                <h3 id="order_review_heading">Your order</h3>


                                                <div id="order_review" class="woocommerce-checkout-review-order">
                                                    <table class="shop_table woocommerce-checkout-review-order-table"
                                                        data-update-time="1724219621">
                                                        <thead>
                                                            <tr>
                                                                <th class="product-name">Product</th>
                                                                <th class="product-total">Subtotal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="cart_item">
                                                                <td class="product-name">
                                                                    <?php echo e($products->name); ?> <strong
                                                                        class="product-quantity">&times;&nbsp;1</strong>
                                                                </td>
                                                                <td class="product-total">
                                                                    <?php if($products->inventorie_id != null): ?>
                                                                        <?php if($products->rel_to_inventorie): ?>
                                                                            <?php
                                                                                $inventorie = $products->rel_to_inventorie
                                                                            ?>
                                                                            <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php if($attribute->sell_price != null): ?>
                                                                                    <span class="woocommerce-Price-amount amount"><bdi ><?php echo e($attribute->sell_price); ?>

                                                                                        <span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>
                                                                                    </span>
                                                                                <?php else: ?>
                                                                                    <span class="woocommerce-Price-amount amount"><bdi ><?php echo e($attribute->price); ?>

                                                                                        <span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>
                                                                                    </span>
                                                                                <?php endif; ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php endif; ?>
                                                                    <?php else: ?>
                                                                        <?php if($products->sell_price != null): ?>
                                                                            <span class="woocommerce-Price-amount amount"><bdi ><?php echo e($products->sell_price); ?>

                                                                                <span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>
                                                                            </span>
                                                                        <?php else: ?>
                                                                            <span class="woocommerce-Price-amount amount"><bdi ><?php echo e($products->price); ?>

                                                                                <span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi>
                                                                            </span>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>

                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>

                                                            <tr class="cart-subtotal">
                                                                <th>Subtotal</th>
                                                                <td>
                                                                    <?php if($products->inventorie_id != null): ?>
                                                                        <?php if($products->rel_to_inventorie): ?>
                                                                            <?php
                                                                                $inventorie = $products->rel_to_inventorie
                                                                            ?>
                                                                            <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php if($attribute->sell_price != null): ?>
                                                                                    <input type="hidden" name="sub_total" value="<?php echo e($attribute->sell_price); ?>" id="sub_total_input">
                                                                                    <span class="woocommerce-Price-amount amount"><bdi id="subtotal_footer"><?php echo e($attribute->sell_price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span>
                                                                                <?php else: ?>
                                                                                    <input type="hidden" name="sub_total" value="<?php echo e($attribute->price); ?>" id="sub_total_input">
                                                                                    <span class="woocommerce-Price-amount amount"><bdi id="subtotal_footer"><?php echo e($attribute->price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span>
                                                                                <?php endif; ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php endif; ?>
                                                                    <?php else: ?>
                                                                        <?php if($products->sell_price != null): ?>
                                                                            <input type="hidden" name="sub_total" value="<?php echo e($products->sell_price); ?>" id="sub_total_input">
                                                                            <span class="woocommerce-Price-amount amount"><bdi id="subtotal_footer"><?php echo e($products->sell_price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span>
                                                                        <?php else: ?>
                                                                            <input type="hidden" name="sub_total" value="<?php echo e($products->price); ?>" id="sub_total_input">
                                                                            <span class="woocommerce-Price-amount amount"><bdi id="subtotal_footer"><?php echo e($products->price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>

                                                                </td>
                                                            </tr>
                                                            <tr class="woocommerce-shipping-totals shipping">
                                                                <th>Shipping</th>
                                                                <td data-title="Shipping">
                                                                    <!-- Shipping Methods -->
                                                                    <ul id="shipping_method" class="woocommerce-shipping-methods">
                                                                        <!-- Sample Shipping Method 1 -->
                                                                        <li>
                                                                            <input type="radio" name="shipping_cost" data-index="0" id="shipping_method_0_flat_rate2" value="60" class="shipping_method" checked="checked">
                                                                            <label for="shipping_method_0_flat_rate2">ঢাকার ভিতরে: <span class="woocommerce-Price-amount amount"><bdi>60<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></label>
                                                                        </li>
                                                                        <!-- Sample Shipping Method 2 -->
                                                                        <li>
                                                                            <input type="radio" name="shipping_cost" data-index="0" id="shipping_method_0_local_pickup3" value="120" class="shipping_method">
                                                                            <label for="shipping_method_0_local_pickup3">ঢাকার বাহিরে: <span class="woocommerce-Price-amount amount"><bdi>120<span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></label>
                                                                        </li>
                                                                    </ul>
                                                                </td>
                                                            </tr>

                                                            <tr class="order-total">
                                                                <th>Total</th>
                                                                <td>
                                                                    <?php if($products->inventorie_id != null): ?>
                                                                        <?php if($products->rel_to_inventorie): ?>
                                                                            <?php
                                                                                $inventorie = $products->rel_to_inventorie
                                                                            ?>
                                                                            <?php $__currentLoopData = $inventorie->rel_to_attribute->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php if($attribute->sell_price != null): ?>
                                                                                    <input type="hidden" name="total" value="<?php echo e($attribute->sell_price); ?>" id="total_input">
                                                                                    <strong><span class="woocommerce-Price-amount amount"><bdi id="total"><?php echo e($attribute->sell_price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></strong>
                                                                                <?php else: ?>
                                                                                    <input type="hidden" name="total" value="<?php echo e($attribute->price); ?>" id="total_input">
                                                                                    <strong><span class="woocommerce-Price-amount amount"><bdi id="total"><?php echo e($attribute->price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></strong>
                                                                                <?php endif; ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php endif; ?>
                                                                    <?php else: ?>
                                                                        <?php if($products->sell_price != null): ?>
                                                                            <input type="hidden" name="total" value="<?php echo e($products->sell_price); ?>" id="total_input">
                                                                            <strong><span class="woocommerce-Price-amount amount"><bdi id="total"><?php echo e($products->sell_price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></strong>
                                                                        <?php else: ?>
                                                                            <input type="hidden" name="total" value="<?php echo e($products->price); ?>" id="total_input">
                                                                            <strong><span class="woocommerce-Price-amount amount"><bdi id="total"><?php echo e($products->price); ?><span class="woocommerce-Price-currencySymbol">৳&nbsp;</span></bdi></span></strong>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>

                                                        </tfoot>
                                                    </table>
                                                    <div id="payment" class="woocommerce-checkout-payment">
                                                        <ul class="wc_payment_methods payment_methods methods">
                                                            <li class="wc_payment_method payment_method_cod">
                                                                <input id="payment_method_cod" type="radio"
                                                                    class="input-radio" name="payment_method"
                                                                    value="cod" checked='checked'
                                                                    data-order_button_text="" />

                                                                <label for="payment_method_cod">
                                                                    Cash on delivery </label>
                                                                <div class="payment_box payment_method_cod">
                                                                    <p>পণ্য হাতে পেয়ে টাকা পরিশোধ করুন ।</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="form-row place-order">
                                                            <noscript>
                                                                Since your browser does not support JavaScript, or it is
                                                                disabled, please ensure you click the <em>Update
                                                                    Totals</em> button before placing your order. You
                                                                may be charged more than the amount stated above if you
                                                                fail to do so. <br /><button type="submit"
                                                                    class="button alt"
                                                                    name="woocommerce_checkout_update_totals"
                                                                    value="Update totals">Update totals</button>
                                                            </noscript>

                                                            <div class="woocommerce-terms-and-conditions-wrapper">
                                                                <div class="woocommerce-privacy-policy-text"></div>
                                                            </div>


                                                            <button type="submit" class="button alt"
                                                                name="woocommerce_checkout_place_order"
                                                                id="place_order"
                                                                value="অর্ডার কনফার্ম করুন"
                                                                data-value="অর্ডার কনফার্ম করুন">অর্ডার
                                                                কনফার্ম করুন</button>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </form>

                                    </div>
                                    <!-- END CHECKOUT SHORTCODE -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-5e7d14a e-flex e-con-boxed e-con e-parent"
                data-id="5e7d14a" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-ca15e09 e-con-full e-flex e-con e-child"
                        data-id="ca15e09" data-element_type="container">
                    </div>
                    <div class="elementor-element elementor-element-1410321 e-con-full e-flex e-con e-child"
                        data-id="1410321" data-element_type="container">
                        <div class="elementor-element elementor-element-1f673d3 elementor-widget elementor-widget-heading"
                            data-id="1f673d3" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">সবকিছু নিশ্চিত থাকলে উপরের
                                    ফর্ম পূরণ করে অর্ডার করুন।
                                    এখন নিবনা পরে নিব, পরে জানাচ্ছি এরকম হলে ফর্ম পূরণ করবেন না,
                                    দয়া করে ।
                                    আপনার সুস্বাস্থ্য কামনা করছি।</h2>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-4eb8e2c e-con-full e-flex e-con e-child"
                        data-id="4eb8e2c" data-element_type="container">
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-7a67916 e-flex e-con-boxed e-con e-parent"
                data-id="7a67916" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-69669ed e-con-full e-flex e-con e-child"
                        data-id="69669ed" data-element_type="container">
                        <div class="elementor-element elementor-element-2a22ae5 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                            data-id="2a22ae5" data-element_type="widget" data-widget_type="icon-list.default">
                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items">
                                    <li class="elementor-icon-list-item">
                                        <?php if($setting->first()->number_two != null): ?>
                                            <a href="tel:<?php echo e($setting->first()->number_two); ?>">
                                                <span class="elementor-icon-list-text"><?php echo e($setting->first()->number_two); ?></span>
                                            </a>
                                        <?php endif; ?>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-a0bc8b6 e-con-full e-flex e-con e-child"
                        data-id="a0bc8b6" data-element_type="container">
                        <div class="elementor-element elementor-element-7088dd8 elementor-align-right elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                            data-id="7088dd8" data-element_type="widget" data-widget_type="icon-list.default">
                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items">
                                    <li class="elementor-icon-list-item">
                                        <?php if($setting->first()->email != null): ?>
                                            <span class="elementor-icon-list-text"><?php echo e($setting->first()->email); ?></span>
                                        <?php endif; ?>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-210a21e e-flex e-con-boxed e-con e-parent"
                data-id="210a21e" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-0759599 elementor-widget elementor-widget-text-editor"
                        data-id="0759599" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <?php if($setting->first()->footer != null): ?>
                            <span class="elementor-icon-list-text"></span>
                        <?php endif; ?>
                            <p><?php echo e($setting->first()->footer); ?>| Powered by <span style="color: #ffff00;"><a style="color: #ffff00;"
                                        href="https://nugortechit.com/">Nugortech IT</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="wcf-quick-view-wrapper">
        <div class="wcf-quick-view-bg">
            <div class="wcf-quick-view-loader"></div>
        </div>
        <div id="wcf-quick-view-modal">
            <div class="wcf-content-main-wrapper"><!--
  -->
                <div class="wcf-content-main">
                    <div class="wcf-lightbox-content">
                        <div class="wcf-content-main-head">
                            <a href="#" id="wcf-quick-view-close"
                                class="wcf-quick-view-close-btn cfa cfa-close"><span
                                    class="cartflows-icon-close"></span></a>
                        </div>
                        <div id="wcf-quick-view-content" class="woocommerce single-product"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .fixed-cart-whats {
            position: fixed;
            bottom: 14rem;
            right: 35px;
            border-radius: 12px;
            cursor: pointer;
            text-align: center;
            align-items: center;
            justify-content: center;
            transition: 0.5s;
            z-index: 9999;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const quantityInput = document.getElementById('quantity');
            const shippingMethods = document.querySelectorAll('.shipping_method');
            const subtotalElement = document.getElementById('subtotal');
            const subtotalFooterElement = document.getElementById('subtotal_footer');
            const totalElement = document.getElementById('total');
            const productPrice = <?php echo e($attribute->price); ?>;
            let shippingCost = 60;

            function updateSubtotalAndTotal() {
                const quantity = parseInt(quantityInput.value);
                const subtotal = productPrice * quantity;
                const total = subtotal + shippingCost;

                subtotalElement.textContent = subtotal + '৳';
                subtotalFooterElement.textContent = subtotal + '৳';
                totalElement.textContent = total + '৳';

                document.getElementById('sub_total_input').value = subtotal;
                document.getElementById('total_input').value = total;
            }

            quantityInput.addEventListener('input', function() {
                updateSubtotalAndTotal();
            });

            shippingMethods.forEach(function(method) {
                method.addEventListener('change', function() {
                    shippingCost = parseInt(this.value);
                    updateSubtotalAndTotal();
                });
            });

            // Initial update
            updateSubtotalAndTotal();
        });
    </script>

    <script type='text/javascript'>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<?php if(session('success')): ?>
            {
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Success...",
                    text: "প্রিয় গ্রাহক অর্ডার কররা জন্য ধন্যবাদ",
                });
            </script>
            }
        <?php endif; ?>
        <?php if(session('error')): ?>
            {
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                    footer: '<a href="#">Why do I have this issue?</a>'
                });
            </script>
            }
        <?php endif; ?>
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocksbbf5.css?ver=wc-9.1.4' media='all' />
    <link rel='stylesheet' id='e-animations-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/elementor/assets/lib/animations/animations.mind5d5.css?ver=3.23.4'
        media='all' />
    <link rel='stylesheet' id='cartflows-elementor-style-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/cartflows/modules/elementor/widgets-css/frontendffdc.css?ver=2.0.9'
        media='all' />
    <link rel='stylesheet' id='cartflows-pro-elementor-style-css'
        href='<?php echo e(asset('landing')); ?>/wp-content/plugins/cartflows-pro/modules/elementor/widgets-css/frontend1717.css?ver=2.0.6'
        media='all' />

    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/chaty/js/cht-front-script.min9bd7.js?ver=3.2.91723568819" id="chaty-front-end-js" defer
        data-wp-strategy="defer"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min4615.js?ver=9.1.4"
        id="sourcebuster-js-js"></script>

    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/cartflows/assets/js/checkout-templateffdc.js?ver=2.0.9" id="wcf-checkout-template-js">
    </script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/cartflows-pro/assets/js/checkout1717.js?ver=2.0.6" id="wcf-pro-checkout-js"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-includes/js/underscore.mind584.js?ver=1.13.4" id="underscore-js"></script>

    <script src="<?php echo e(asset('landing')); ?>/wp-includes/js/wp-util.minb6a4.js?ver=6.6.1" id="wp-util-js"></script>

    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min4615.js?ver=9.1.4"
        id="wc-add-to-cart-variation-js" defer data-wp-strategy="defer"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.min75ae.js?ver=2.7.2-wc.9.1.4"
        id="flexslider-js" defer data-wp-strategy="defer"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min28fc.js?ver=3.23.3"
        id="elementor-pro-webpack-runtime-js"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/elementor/assets/js/webpack.runtime.mind5d5.js?ver=3.23.4"
        id="elementor-webpack-runtime-js"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/elementor/assets/js/frontend-modules.mind5d5.js?ver=3.23.4"
        id="elementor-frontend-modules-js"></script>

    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/elementor-pro/assets/js/frontend.min28fc.js?ver=3.23.3" id="elementor-pro-frontend-js">
    </script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.23.4",
            "is_static": false,
            "experimentalFeatures": {
                "e_optimized_css_loading": true,
                "e_font_icon_svg": true,
                "additional_custom_breakpoints": true,
                "container": true,
                "container_grid": true,
                "e_swiper_latest": true,
                "e_nested_atomic_repeaters": true,
                "e_onboarding": true,
                "theme_builder_v2": true,
                "hello-theme-header-footer": true,
                "home_screen": true,
                "ai-layout": true,
                "landing-pages": true,
                "e_lazyload": true,
                "display-conditions": true,
                "form-submissions": true,
                "taxonomy-filter": true
            },
            "urls": {
                "assets": "https:\/\/peacockbd.com\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/peacockbd.com\/wp-admin\/admin-ajax.php"
            },
            "nonces": {
                "floatingButtonsClickTracking": "c7e678c906"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description",
                "woocommerce_notices_elements": [],
                "hello_header_logo_type": "title",
                "hello_header_menu_layout": "horizontal",
                "hello_footer_logo_type": "logo"
            },
            "post": {
                "id": 15,
                "title": "Peacock%20Shop%20%E2%80%93%20Your%20Luxery%20Brand%20Shop",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/elementor/assets/js/frontend.mind5d5.js?ver=3.23.4" id="elementor-frontend-js"></script>
    <script src="<?php echo e(asset('landing')); ?>/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min28fc.js?ver=3.23.3"
        id="pro-elements-handlers-js"></script>


</body>




</html>
<?php /**PATH /home/nitebiz/luxurycollection.nitebiz.com/resources/views/landingpage/secondpage.blade.php ENDPATH**/ ?>