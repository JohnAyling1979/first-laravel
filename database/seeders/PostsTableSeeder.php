<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Post One',
                'excerpt' => 'Summary One',
                'body' => 'One Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec placerat ipsum, in pretium odio. Integer ac justo erat. Praesent cursus velit ac pretium scelerisque. Nam porta metus orci, eleifend aliquam nunc consectetur id. Aliquam porttitor venenatis diam nec sagittis. Nulla sed imperdiet eros, quis consectetur turpis. Quisque a efficitur nunc. Maecenas varius, lorem sit amet suscipit bibendum, purus sem hendrerit turpis, non tempor metus magna ac ex. In hac habitasse platea dictumst.
                    Aenean cursus aliquet massa ac pretium. Pellentesque neque leo, dapibus dignissim luctus a, sollicitudin in lorem. Pellentesque aliquam nisl vel tellus ultricies ultricies. Phasellus tellus massa, molestie id mauris gravida, pharetra lobortis neque. Sed ullamcorper cursus est ut rutrum. Vivamus venenatis lorem venenatis neque sagittis, sed consequat magna tincidunt. Praesent eget nisl nisl. Quisque cursus justo ex, nec finibus tellus eleifend sit amet. Morbi ultricies ante eu ligula mollis vehicula. Donec facilisis facilisis nisl id accumsan. Nunc dapibus eget lacus non finibus.
                    Morbi fringilla, dui nec mollis fermentum, turpis nisi faucibus justo, vel blandit neque est id est. Vivamus quis gravida nisl. Ut scelerisque viverra lectus, eget commodo orci mattis non. Nam at varius tortor. Praesent facilisis sapien id eros tempor dignissim. Fusce eu nibh a odio accumsan egestas in a erat. Vivamus sagittis eros blandit dapibus suscipit. Etiam lacinia convallis mi et dapibus. Curabitur sed metus a ipsum vehicula porta. Nunc pretium consequat consectetur. Suspendisse potenti. Aenean laoreet, lorem et tempor feugiat, odio nisl facilisis arcu, sed dapibus velit lacus ac dui. Cras vel imperdiet eros, at tincidunt neque. Donec pellentesque imperdiet diam, a viverra enim consequat sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec convallis hendrerit rutrum. Aliquam finibus, nibh non gravida bibendum, ipsum diam consequat orci, tincidunt mollis felis purus et felis. Duis urna tortor, viverra a ante vel, maximus consectetur odio. Ut molestie finibus lacinia. Donec feugiat, magna ut ultrices porta, urna urna pretium erat, ornare gravida nibh ligula consectetur nisi. Integer ultricies nisl quam, nec dapibus ante pellentesque in.
                    Mauris a luctus magna, at blandit purus. Quisque vestibulum ipsum in bibendum eleifend. Cras porta libero a lobortis posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet arcu varius, ultrices elit vitae, tincidunt eros. Maecenas consectetur libero quis mattis vehicula. Donec posuere porttitor massa eu porttitor. Etiam eget lacus sapien. Quisque ac est nec augue malesuada tincidunt eu quis purus.
                ',
                'image_path' => '',
                'is_published' => false,
                'min_to_read' => 2,
            ],
            [
                'title' => 'Post Two',
                'excerpt' => 'Summary Two',
                'body' => 'Two Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec placerat ipsum, in pretium odio. Integer ac justo erat. Praesent cursus velit ac pretium scelerisque. Nam porta metus orci, eleifend aliquam nunc consectetur id. Aliquam porttitor venenatis diam nec sagittis. Nulla sed imperdiet eros, quis consectetur turpis. Quisque a efficitur nunc. Maecenas varius, lorem sit amet suscipit bibendum, purus sem hendrerit turpis, non tempor metus magna ac ex. In hac habitasse platea dictumst.
                    Aenean cursus aliquet massa ac pretium. Pellentesque neque leo, dapibus dignissim luctus a, sollicitudin in lorem. Pellentesque aliquam nisl vel tellus ultricies ultricies. Phasellus tellus massa, molestie id mauris gravida, pharetra lobortis neque. Sed ullamcorper cursus est ut rutrum. Vivamus venenatis lorem venenatis neque sagittis, sed consequat magna tincidunt. Praesent eget nisl nisl. Quisque cursus justo ex, nec finibus tellus eleifend sit amet. Morbi ultricies ante eu ligula mollis vehicula. Donec facilisis facilisis nisl id accumsan. Nunc dapibus eget lacus non finibus.
                    Morbi fringilla, dui nec mollis fermentum, turpis nisi faucibus justo, vel blandit neque est id est. Vivamus quis gravida nisl. Ut scelerisque viverra lectus, eget commodo orci mattis non. Nam at varius tortor. Praesent facilisis sapien id eros tempor dignissim. Fusce eu nibh a odio accumsan egestas in a erat. Vivamus sagittis eros blandit dapibus suscipit. Etiam lacinia convallis mi et dapibus. Curabitur sed metus a ipsum vehicula porta. Nunc pretium consequat consectetur. Suspendisse potenti. Aenean laoreet, lorem et tempor feugiat, odio nisl facilisis arcu, sed dapibus velit lacus ac dui. Cras vel imperdiet eros, at tincidunt neque. Donec pellentesque imperdiet diam, a viverra enim consequat sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec convallis hendrerit rutrum. Aliquam finibus, nibh non gravida bibendum, ipsum diam consequat orci, tincidunt mollis felis purus et felis. Duis urna tortor, viverra a ante vel, maximus consectetur odio. Ut molestie finibus lacinia. Donec feugiat, magna ut ultrices porta, urna urna pretium erat, ornare gravida nibh ligula consectetur nisi. Integer ultricies nisl quam, nec dapibus ante pellentesque in.
                    Mauris a luctus magna, at blandit purus. Quisque vestibulum ipsum in bibendum eleifend. Cras porta libero a lobortis posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet arcu varius, ultrices elit vitae, tincidunt eros. Maecenas consectetur libero quis mattis vehicula. Donec posuere porttitor massa eu porttitor. Etiam eget lacus sapien. Quisque ac est nec augue malesuada tincidunt eu quis purus.
                ',
                'image_path' => '',
                'is_published' => false,
                'min_to_read' => 4,
            ],
        ];

        foreach ($posts as $post)
        {
            Post::create($post);
        }
    }
}
