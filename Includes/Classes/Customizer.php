<?php

namespace JadaNails\Includes\Classes;

trait Customizer {
    /**
     * @param $wp_customize
     */
    public function initCustomizer($wp_customize) {

        if (!class_exists('Kirki')) {
            return;
        }

        $this->panalRegister($wp_customize);
        $this->sectionRegister($wp_customize);
        $this->settingsRegister();

    }

    /**
     * @param $wp_customize
     */
    public function panalRegister($wp_customize) {
        $wp_customize->add_panel('jada-nails', array(
            'title'       => 'Jada Nails Settings',
            'description' => 'This is panel Description',
            'priority'    => 10
        ));

    }

    /**
     * @param $wp_customize
     */
    public function sectionRegister($wp_customize) {
        $wp_customize->add_section('banner_section', array(
            'title'    => 'Banner Section',
            'priority' => 10,
            'panel'    => 'jada-nails'
        ));
    }

    public function settingsRegister() {

        $this->bannerSettings();
    }

    public function bannerSettings() {
        \Kirki::add_field('theme_config_id', [
            'type'      => 'textarea',
            'settings'  => 'bannerHeader',
            'label'     => __('Banner Header Text', 'kirki'),
            'section'   => 'banner_section',
            'default'   => 'IHR FACHHANDEL FÜR NAGELDESIGN',
            'transport' => 'auto',
            'output'    => [
                [
                    'element' => '.hero_section .hero_text'
                ]
            ]
        ]);
        \Kirki::add_field('theme_config_id', [
            'type'      => 'textarea',
            'settings'  => 'bannerDescription',
            'label'     => __('Banner Header Description', 'kirki'),
            'section'   => 'banner_section',
            'default'   => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.',
            'transport' => 'auto',
            'output'    => [
                [
                    'element' => '.hero_section .description'
                ]
            ]
        ]);

        \Kirki::add_field('theme_config_id', [
            'type'      => 'link',
            'settings'  => 'bannerBtnURL',
            'label'     => __('Banner Header Button Link', 'kirki'),
            'section'   => 'banner_section',
            'default'   => '',
            'transport' => 'auto'
        ]);

        \Kirki::add_field('theme_config_id', [
            'type'        => 'image',
            'settings'    => 'bannerBackground',
            'label'       => esc_html__('Image Control (URL)', 'kirki'),
            'description' => esc_html__('Description Here.', 'kirki'),
            'section'     => 'banner_section',
            'default'     => JADA_NAILS_URL . 'Public/Assets/Bilder/Header.png'
        ]);
    }
}