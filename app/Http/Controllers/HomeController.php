<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

// Shared Menu Items Data
    private function getMenuItems()
    {
        return [
            [
                'image' => 'Chocolate_Fudge.jpg',
                'title' => 'Chocolate Fudge Cake',
                'description' => 'A rich and moist chocolate cake with a decadent fudge frosting.',
                'price' => 20.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Red_Velvet.jpg',
                'title' => 'Red Velvet Cake',
                'description' => 'A soft, velvety cake with a hint of cocoa and a smooth cream cheese frosting.',
                'price' => 22.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Carrot_Cake.jpg',
                'title' => 'Carrot Cake',
                'description' => 'A spiced cake packed with shredded carrots and walnuts, topped with tangy cream cheese frosting.',
                'price' => 18.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Lemon_Drizzle.jpg',
                'title' => 'Lemon Drizzle Cake',
                'description' => 'A light and zesty sponge cake soaked with a sweet and tangy lemon glaze.',
                'price' => 16.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Black_Forest.jpg',
                'title' => 'Black Forest Cake',
                'description' => 'A decadent chocolate sponge cake layered with cherries and whipped cream, topped with chocolate shavings.',
                'price' => 23.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Coffee_Walnut.jpg',
                'title' => 'Coffee Walnut Cake',
                'description' => 'A moist coffee-flavored cake studded with crunchy walnuts and frosted with coffee buttercream.',
                'price' => 20.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Pineapple_Upside_Down.jpg',
                'title' => 'Pineapple Upside-Down Cake',
                'description' => 'A caramelized pineapple-topped cake with a light, buttery base.',
                'price' => 17.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Funfetti_Cake.jpg',
                'title' => 'Funfetti Cake',
                'description' => 'A cheerful vanilla cake filled with colorful sprinkles and frosted with sweet buttercream.',
                'price' => 18.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Victoria_Sponge.jpg',
                'title' => 'Victoria Sponge Cake',
                'description' => 'A light sponge cake filled with jam and whipped cream or buttercream.',
                'price' => 16.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Banana_Cake.jpg',
                'title' => 'Banana Cake',
                'description' => 'A moist, sweet cake made with ripe bananas and topped with cream cheese frosting.',
                'price' => 15.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Tiramisu_Cake.jpg',
                'title' => 'Tiramisu Cake',
                'description' => 'A coffee-flavored layered cake inspired by the classic Italian dessert, with mascarpone and cocoa.',
                'price' => 24.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Coconut_Cake.webp',
                'title' => 'Coconut Cake',
                'description' => 'A fluffy white cake infused with coconut flavor and covered in creamy coconut frosting.',
                'price' => 19.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Marble_Cake.webp',
                'title' => 'Marble Cake',
                'description' => 'A fun mix of vanilla and chocolate swirls in every slice, topped with buttercream frosting.',
                'price' => 17.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Strawberry_Shortcake.jpg',
                'title' => 'Strawberry Shortcake',
                'description' => 'A light sponge cake layered with fresh strawberries and whipped cream.',
                'price' => 21.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Matcha_Cake.jpg',
                'title' => 'Matcha Cake',
                'description' => 'A green tea-flavored cake with a light, earthy sweetness and smooth cream frosting.',
                'price' => 22.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Pumpkin_Spice.jpg',
                'title' => 'Pumpkin Spice Cake',
                'description' => 'A moist, spiced cake with the warm flavors of pumpkin, cinnamon, and nutmeg, topped with cream cheese frosting.',
                'price' => 19.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Almond_Cake.jpg',
                'title' => 'Almond Cake',
                'description' => 'A delicate, nutty-flavored cake made with ground almonds and topped with almond buttercream.',
                'price' => 25.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Opera_Cake.jpg',
                'title' => 'Opera Cake',
                'description' => 'A luxurious French layered cake with coffee, almond sponge, and rich chocolate ganache.',
                'price' => 28.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Cinnamon_Roll.jpg',
                'title' => 'Cinnamon Roll Cake',
                'description' => 'A cinnamon-spiced cake with a cream cheese drizzle, inspired by the classic breakfast treat.',
                'price' => 18.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Peanut_Butter.webp',
                'title' => 'Peanut Butter Cake',
                'description' => 'A rich and creamy cake made with layers of peanut butter frosting and chocolate ganache.',
                'price' => 23.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Sacher_Torte.png',
                'title' => 'Sacher Torte',
                'description' => 'A dense, rich chocolate cake layered with apricot jam and covered in dark chocolate glaze.',
                'price' => 30.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Rainbow_Cake.jpg',
                'title' => 'Rainbow Cake',
                'description' => 'A colorful multi-layer cake with vibrant sponge layers and sweet vanilla buttercream.',
                'price' => 24.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Tres_Leches.jpg',
                'title' => 'Tres Leches Cake',
                'description' => 'A soft sponge cake soaked in three types of milk and topped with whipped cream.',
                'price' => 20.00,
                'price_unit' => 'per kg'
            ],
            [
                'image' => 'Orange_Cake.webp',
                'title' => 'Orange Cake',
                'description' => 'A bright and citrusy cake with orange zest and a light glaze for extra sweetness.',
                'price' => 17.00,
                'price_unit' => 'per kg'
            ],
            // Add the remaining items here...
        ];
    }

    public function menu(Request $request)
    {
        // Get menu items
        $menuItems = $this->getMenuItems();

        // Paginate menu items
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 12;
        $currentItems = array_slice($menuItems, ($currentPage - 1) * $perPage, $perPage);
        $paginator = new LengthAwarePaginator($currentItems, count($menuItems), $perPage, $currentPage, [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);

        return view('navbar-pages.menu', ['menuItems' => $paginator]);
    }

    // Customize Page
    public function customize()
    {
        // Get menu items
        $menuItems = $this->getMenuItems();

        // Extract titles for cake names
        $cakeNames = array_column($menuItems, 'title');

        return view('customize', compact('cakeNames'));
    }

    public function cart()
    {
        return view('navbar-pages.cart');
    }

    public function about()
    {
        return view('navbar-pages.about');
    }

    public function contact()
    {
        return view('navbar-pages.contact');
    }

//    public function customize()
//    {
//        $cakeNames = ['Chocolate Cake', 'Vanilla Cake', 'Red Velvet Cake', 'Black Forest Cake', 'Cheesecake'];
//        return view('customize', compact('cakeNames'));
//    }

//    public function menu(Request $request)
//    {
//        $menuItems = [
//            [
//                'image' => 'Chocolate_Fudge.jpg',
//                'title' => 'Chocolate Fudge Cake',
//                'description' => 'A rich and moist chocolate cake with a decadent fudge frosting.',
//                'price' => 20.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Red_Velvet.jpg',
//                'title' => 'Red Velvet Cake',
//                'description' => 'A soft, velvety cake with a hint of cocoa and a smooth cream cheese frosting.',
//                'price' => 22.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Carrot_Cake.jpg',
//                'title' => 'Carrot Cake',
//                'description' => 'A spiced cake packed with shredded carrots and walnuts, topped with tangy cream cheese frosting.',
//                'price' => 18.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Lemon_Drizzle.jpg',
//                'title' => 'Lemon Drizzle Cake',
//                'description' => 'A light and zesty sponge cake soaked with a sweet and tangy lemon glaze.',
//                'price' => 16.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Black_Forest.jpg',
//                'title' => 'Black Forest Cake',
//                'description' => 'A decadent chocolate sponge cake layered with cherries and whipped cream, topped with chocolate shavings.',
//                'price' => 23.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Coffee_Walnut.jpg',
//                'title' => 'Coffee Walnut Cake',
//                'description' => 'A moist coffee-flavored cake studded with crunchy walnuts and frosted with coffee buttercream.',
//                'price' => 20.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Pineapple_Upside_Down.jpg',
//                'title' => 'Pineapple Upside-Down Cake',
//                'description' => 'A caramelized pineapple-topped cake with a light, buttery base.',
//                'price' => 17.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Funfetti_Cake.jpg',
//                'title' => 'Funfetti Cake',
//                'description' => 'A cheerful vanilla cake filled with colorful sprinkles and frosted with sweet buttercream.',
//                'price' => 18.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Victoria_Sponge.jpg',
//                'title' => 'Victoria Sponge Cake',
//                'description' => 'A light sponge cake filled with jam and whipped cream or buttercream.',
//                'price' => 16.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Banana_Cake.jpg',
//                'title' => 'Banana Cake',
//                'description' => 'A moist, sweet cake made with ripe bananas and topped with cream cheese frosting.',
//                'price' => 15.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Tiramisu_Cake.jpg',
//                'title' => 'Tiramisu Cake',
//                'description' => 'A coffee-flavored layered cake inspired by the classic Italian dessert, with mascarpone and cocoa.',
//                'price' => 24.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Coconut_Cake.webp',
//                'title' => 'Coconut Cake',
//                'description' => 'A fluffy white cake infused with coconut flavor and covered in creamy coconut frosting.',
//                'price' => 19.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Marble_Cake.webp',
//                'title' => 'Marble Cake',
//                'description' => 'A fun mix of vanilla and chocolate swirls in every slice, topped with buttercream frosting.',
//                'price' => 17.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Strawberry_Shortcake.jpg',
//                'title' => 'Strawberry Shortcake',
//                'description' => 'A light sponge cake layered with fresh strawberries and whipped cream.',
//                'price' => 21.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Matcha_Cake.jpg',
//                'title' => 'Matcha Cake',
//                'description' => 'A green tea-flavored cake with a light, earthy sweetness and smooth cream frosting.',
//                'price' => 22.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Pumpkin_Spice.jpg',
//                'title' => 'Pumpkin Spice Cake',
//                'description' => 'A moist, spiced cake with the warm flavors of pumpkin, cinnamon, and nutmeg, topped with cream cheese frosting.',
//                'price' => 19.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Almond_Cake.jpg',
//                'title' => 'Almond Cake',
//                'description' => 'A delicate, nutty-flavored cake made with ground almonds and topped with almond buttercream.',
//                'price' => 25.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Opera_Cake.jpg',
//                'title' => 'Opera Cake',
//                'description' => 'A luxurious French layered cake with coffee, almond sponge, and rich chocolate ganache.',
//                'price' => 28.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Cinnamon_Roll.jpg',
//                'title' => 'Cinnamon Roll Cake',
//                'description' => 'A cinnamon-spiced cake with a cream cheese drizzle, inspired by the classic breakfast treat.',
//                'price' => 18.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Peanut_Butter.webp',
//                'title' => 'Peanut Butter Cake',
//                'description' => 'A rich and creamy cake made with layers of peanut butter frosting and chocolate ganache.',
//                'price' => 23.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Sacher_Torte.png',
//                'title' => 'Sacher Torte',
//                'description' => 'A dense, rich chocolate cake layered with apricot jam and covered in dark chocolate glaze.',
//                'price' => 30.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Rainbow_Cake.jpg',
//                'title' => 'Rainbow Cake',
//                'description' => 'A colorful multi-layer cake with vibrant sponge layers and sweet vanilla buttercream.',
//                'price' => 24.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Tres_Leches.jpg',
//                'title' => 'Tres Leches Cake',
//                'description' => 'A soft sponge cake soaked in three types of milk and topped with whipped cream.',
//                'price' => 20.00,
//                'price_unit' => 'per kg'
//            ],
//            [
//                'image' => 'Orange_Cake.webp',
//                'title' => 'Orange Cake',
//                'description' => 'A bright and citrusy cake with orange zest and a light glaze for extra sweetness.',
//                'price' => 17.00,
//                'price_unit' => 'per kg'
//            ],
//        ];
//
//        // Get the current page from the request, default is 1
//        $currentPage = LengthAwarePaginator::resolveCurrentPage();
//
//        // Number of items you want per page
//        $perPage = 12;
//
//        // Slice the array of menu items to get the items to display in the current page
//        $currentItems = array_slice($menuItems, ($currentPage - 1) * $perPage, $perPage);
//
//        // Create the paginator
//        $paginator = new LengthAwarePaginator($currentItems, count($menuItems), $perPage, $currentPage, [
//            'path' => $request->url(), // Keeps the current URL
//            'query' => $request->query(), // Keeps the query parameters in the URL
//        ]);
//
//        return view('navbar-pages.menu', ['menuItems' => $paginator]);
////        return view('navbar-pages.menu', compact('menuItems'));
//    }


}
