<?php

namespace Database\Seeders;

use Botble\Base\Models\MetaBox as MetaBoxModel;
use Botble\Base\Supports\BaseSeeder;
use Botble\Blog\Models\Post;
use Botble\Ecommerce\Models\Product;
use Botble\Language\Models\LanguageMeta;
use Botble\Menu\Models\Menu as MenuModel;
use Botble\Menu\Models\MenuLocation;
use Botble\Menu\Models\MenuNode;
use Botble\Page\Models\Page;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Menu;
use MetaBox;

class MenuSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'name'     => 'Main menu',
                'location' => 'main-menu',
                'items'    => [
                    [
                        'title'       => 'Home',
                        'url'         => '/',
                        'child_style' => 'two_col',
                        'children'    => [
                            [
                                'title'     => 'Homepage 1',
                                'url'       => '/',
                                'icon_font' => 'fi fi-rr-home',
                            ],
                            [
                                'title'          => 'Homepage 2',
                                'reference_id'   => 9,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-home',
                            ],
                            [
                                'title'          => 'Homepage 3',
                                'reference_id'   => 10,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-home',
                            ],
                            [
                                'title'          => 'Homepage 4',
                                'reference_id'   => 11,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-home',
                            ],
                            [
                                'title'          => 'Homepage 5',
                                'reference_id'   => 12,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-home',
                            ],
                            [
                                'title'          => 'Homepage 6',
                                'reference_id'   => 13,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-home',
                            ],
                            [
                                'title'          => 'Homepage 7',
                                'reference_id'   => 14,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-home',
                            ],
                            [
                                'title'          => 'Homepage 8',
                                'reference_id'   => 15,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-home',
                            ],
                        ],
                    ],
                    [
                        'title'       => 'Company',
                        'url'         => '#',
                        'child_style' => 'hr_per_2_child',
                        'children'    => [
                            [
                                'title'          => 'Service',
                                'reference_id'   => 6,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-gem',
                            ],
                            [
                                'title'          => 'Service - 2',
                                'reference_id'   => 16,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-headset',
                            ],
                            [
                                'title'          => 'Pricing',
                                'reference_id'   => 7,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-database',
                            ],
                            [
                                'title'          => 'Pricing - 2',
                                'reference_id'   => 17,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-database',
                            ],
                            [
                                'title'          => 'FAQs',
                                'reference_id'   => 8,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-headset',
                            ],
                            [
                                'title'          => 'FAQs - 2',
                                'reference_id'   => 18,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-headset',
                            ],
                            [
                                'title'          => 'Career',
                                'reference_id'   => 19,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-briefcase',
                            ],
                            [
                                'title'          => 'Career Details',
                                'reference_id'   => 20,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-briefcase',
                            ],
                        ],
                    ],
                    [
                        'title'    => 'Pages',
                        'url'      => '#',
                        'children' => [
                            [
                                'title'          => 'Contact',
                                'reference_id'   => 3,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-paper-plane',
                            ],
                            [
                                'title'          => 'About Us - 1',
                                'reference_id'   => 5,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-star',
                            ],
                            [
                                'title'          => 'About Us - 2',
                                'reference_id'   => 21,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-star',
                            ],
                            [
                                'title'          => 'About Us - 3',
                                'reference_id'   => 22,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-star',
                            ],
                            [
                                'title'     => 'Sign Up',
                                'url'       => '/register',
                                'icon_font' => 'fi fi-rr-user-add',
                            ],
                            [
                                'title'     => 'Log In',
                                'url'       => '/login',
                                'icon_font' => 'fi fi-rr-fingerprint',
                            ],
                            [
                                'title'     => 'Reset Password',
                                'url'       => '/password/reset',
                                'icon_font' => 'fi fi-rr-settings',
                            ],
                            [
                                'title'     => 'Error 404',
                                'url'       => '404',
                                'icon_font' => 'fi fi-rr-exclamation',
                            ],
                        ],
                    ],
                    [
                        'title'          => 'Blog',
                        'reference_id'   => 2,
                        'reference_type' => Page::class,
                        'child_style'    => 'hr_per_2_child',
                        'children'       => [
                            [
                                'title'          => 'Blog Archive - 1',
                                'reference_id'   => 2,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-edit',
                            ],
                            [
                                'title'          => 'Blog Archive - 2',
                                'reference_id'   => 23,
                                'reference_type' => Page::class,
                                'icon_font'      => 'fi fi-rr-edit',
                            ],
                            [
                                'title'     => 'Post Details',
                                'url'       => Post::find(1)->url,
                                'icon_font' => 'fi fi-rr-document-signed',
                            ],
                        ],
                    ],
                    [
                        'title'    => 'Shop',
                        'url'      => '#',
                        'children' => [
                            [
                                'title'     => 'Shop Grid - 1',
                                'url'       => '/products',
                                'icon_font' => 'fi fi-rr-edit',
                            ],
                            [
                                'title'     => 'Shop Grid - 2',
                                'url'       => '/products?layout=grid-2',
                                'icon_font' => 'fi fi-rr-edit',
                            ],
                            [
                                'title'     => 'Product Details',
                                'url'       => Product::find(1)->url,
                                'icon_font' => 'fi fi-rr-edit',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name'  => 'About Us',
                'items' => [
                    [
                        'title' => 'Mission & Vision',
                        'url'   => '/',
                    ],
                    [
                        'title' => 'Our Team',
                        'url'   => '/',
                    ],
                    [
                        'title'          => 'Careers',
                        'reference_id'   => 19,
                        'reference_type' => Page::class,
                    ],
                    [
                        'title' => 'Press &amp; Media',
                        'url'   => '/',
                    ],
                    [
                        'title' => 'Advertising',
                        'url'   => '/',
                    ],
                    [
                        'title' => 'Testimonials',
                        'url'   => '/',
                    ],
                ],
            ],
            [
                'name'  => 'Discover',
                'items' => [
                    [
                        'title'          => 'Our Blog',
                        'reference_id'   => 2,
                        'reference_type' => Page::class,
                    ],
                    [
                        'title'          => 'Plans &amp; Pricing',
                        'reference_id'   => 7,
                        'reference_type' => Page::class,
                    ],
                    [
                        'title' => 'Knowledge Base',
                        'url'   => '/',
                    ],
                    [
                        'title'          => 'Cookie Policy',
                        'reference_id'   => 4,
                        'reference_type' => Page::class,
                    ],
                    [
                        'title' => 'Office Center',
                        'url'   => '/',
                    ],
                    [
                        'title' => 'News &amp; Events',
                        'url'   => '/',
                    ],
                ],
            ],
            [
                'name'  => 'Support',
                'items' => [
                    [
                        'title'          => 'FAQs',
                        'reference_id'   => 8,
                        'reference_type' => Page::class,
                    ],
                    [
                        'title' => 'Editor Help',
                        'url'   => '/',
                    ],
                    [
                        'title' => 'Community',
                        'url'   => '/',
                    ],
                    [
                        'title' => 'Live Chatting',
                        'url'   => '/',
                    ],
                    [
                        'title'          => 'Contact Us',
                        'reference_id'   => 3,
                        'reference_type' => Page::class,
                    ],
                    [
                        'title' => 'Support Center',
                        'url'   => '/',
                    ],
                ],
            ],
            [
                'name'  => 'Useful links',
                'items' => [
                    [
                        'title' => 'Request an offer',
                        'url'   => '/',
                    ],
                    [
                        'title' => 'How it works',
                        'url'   => '/',
                    ],
                    [
                        'title'          => 'Pricing',
                        'reference_id'   => 17,
                        'reference_type' => Page::class,
                    ],
                    [
                        'title' => 'Reviews',
                        'url'   => '/',
                    ],
                    [
                        'title' => 'Stories',
                        'url'   => '/',
                    ],
                ],
            ],
            [
                'name'     => 'Footer bottom menu',
                'location' => 'footer-bottom-menu',
                'items'    => [
                    [
                        'title'          => 'Privacy policy',
                        'reference_id'   => 4,
                        'reference_type' => Page::class,
                    ],
                    [
                        'title'          => 'Cookies',
                        'reference_id'   => 4,
                        'reference_type' => Page::class,
                    ],
                    [
                        'title'          => 'Terms of service',
                        'reference_id'   => 4,
                        'reference_type' => Page::class,
                    ],
                ],
            ],
        ];

        MenuModel::truncate();
        MenuLocation::truncate();
        MenuNode::truncate();
        MetaBoxModel::where('reference_type', MenuNode::class)->delete();
        LanguageMeta::where('reference_type', MenuModel::class)->delete();
        LanguageMeta::where('reference_type', MenuLocation::class)->delete();

        $locales = ['en_US', 'vi'];
        foreach ($menus as $index => $item) {
            foreach ($locales as $locale) {
                $item['name'] = Arr::get($this->trans(), $locale . '.' . $item['name'], $item['name']);
                $item['slug'] = Str::slug($item['name']);

                $this->saveMenu($item, $locale, $index);
            }
        }

        Menu::clearCacheMenuItems();
    }

    /**
     * @return array
     */
    protected function trans(): array
    {
        return [
            'vi' => [
                'Main menu'          => 'Menu ch??nh',
                'Home'               => 'Trang ch???',
                'Homepage'           => 'Trang ch???',
                'Homepage 1'         => 'Trang ch??? 1',
                'Homepage 2'         => 'Trang ch??? 2',
                'Homepage 3'         => 'Trang ch??? 3',
                'Homepage 4'         => 'Trang ch??? 4',
                'Homepage 5'         => 'Trang ch??? 5',
                'Homepage 6'         => 'Trang ch??? 6',
                'Homepage 7'         => 'Trang ch??? 7',
                'Homepage 8'         => 'Trang ch??? 8',
                'Contact'            => 'Li??n h???',
                'About Us'           => 'V??? ch??ng t??i',
                'About'              => 'V??? ch??ng t??i',
                'Discover'           => 'Kh??m ph??',
                'Support'            => 'H??? tr???',
                'Useful links'       => 'Li??n k???t h???u ??ch',
                'Company'            => 'C??ng ty',
                'Footer bottom menu' => 'Menu d?????i ch??n trang',
                'About Us - 1'       => 'V??? ch??ng t??i - 1',
                'About Us - 2'       => 'V??? ch??ng t??i - 2',
                'About Us - 3'       => 'V??? ch??ng t??i - 3',
                'Service'            => 'D???ch v???',
                'Service - 2'        => 'D???ch v??? - 2',
                'Pages'              => 'Trang',
                'Pricing'            => 'B???ng gi??',
                'Pricing - 2'        => 'B???ng gi?? - 2',
                'Sign Up'            => '????ng k??',
                'Log In'             => '????ng Nh???p',
                'Reset Password'     => 'Qu??n m???t kh???u',
                'Error 404'          => 'L???i 404',
                'Blog Archive - 1'   => 'Tin t???c - 1',
                'Blog Archive - 2'   => 'Tin t???c - 2',
                'Post Detail'        => 'Chi ti???t tin t???c',
                'Shop Grid - 1'      => 'S???n ph???m - 1',
                'Shop Grid - 2'      => 'S???n ph???m - 2',
                'Product Details'    => 'Chi ti???t s???n ph???m',
            ],
        ];
    }

    /**
     * @param array $item
     * @param string $locale
     * @param int $index
     */
    protected function saveMenu($item, $locale, $index)
    {
        $menu = MenuModel::create(Arr::except($item, ['items', 'location']));

        if (isset($item['location'])) {
            $menuLocation = MenuLocation::create([
                'menu_id'  => $menu->id,
                'location' => $item['location'],
            ]);

            $originValue = LanguageMeta::where([
                'reference_id'   => $locale == 'en_US' ? 1 : 2,
                'reference_type' => MenuLocation::class,
            ])->value('lang_meta_origin');

            LanguageMeta::saveMetaData($menuLocation, $locale, $originValue);
        }

        foreach ($item['items'] as $menuNode) {
            $this->createMenuNode($index, $menuNode, $locale, $menu->id);
        }

        $originValue = null;

        if ($locale !== 'en_US') {
            $originValue = LanguageMeta::where([
                'reference_id'   => $index * 2 + 1,
                'reference_type' => MenuModel::class,
            ])->value('lang_meta_origin');
        }

        LanguageMeta::saveMetaData($menu, $locale, $originValue);
    }

    /**
     * @param int $index
     * @param array $menuNode
     * @param string $locale
     * @param int $menuId
     * @param int $parentId
     */
    protected function createMenuNode(int $index, array $menuNode, string $locale, int $menuId, int $parentId = 0): void
    {
        $menuNode['menu_id'] = $menuId;
        $menuNode['parent_id'] = $parentId;
        $menuNode['title'] = Arr::get($this->trans(), $locale . '.' . $menuNode['title'], $menuNode['title']);

        if (isset($menuNode['url'])) {
            $menuNode['url'] = str_replace(url(''), '', $menuNode['url']);
        }

        if (Arr::has($menuNode, 'children')) {
            $children = $menuNode['children'];
            $menuNode['has_child'] = true;

            unset($menuNode['children']);
        } else {
            $children = [];
            $menuNode['has_child'] = false;
        }

        $createdNode = MenuNode::create(Arr::except($menuNode, 'child_style'));

        if (Arr::has($menuNode, 'child_style')) {
            MetaBox::saveMetaBoxData($createdNode, 'child_style', Arr::get($menuNode, 'child_style'));
        }

        if ($children) {
            foreach ($children as $child) {
                $this->createMenuNode($index, $child, $locale, $menuId, $createdNode->id);
            }
        }
    }
}
