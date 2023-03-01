<?php

namespace App\Models;



class post
{
    private static $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Juli",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum excepturi atque ipsam saepe beatae ipsum optio corporis nihil provident. Qui, eos magni doloremque ab earum facere alias sapiente assumenda nemo iure ipsum aliquid. Eius expedita odit natus iusto tenetur autem d      olor accusamus quo quaerat earum amet modi dicta perferendis, cumque, odio inventore molestias neque beatae illum magni animi laudantium obcaecati corrupti. Modi commodi magnam tempore nulla minus esse voluptatum illo neque ea odio eligendi delectus provident ut pariatur non in quisquam officiis, vel, nesciunt, porro quo placeat at. Culpa recusandae quibusdam mollitia optio reprehenderit maxime, ex consequuntur quia vitae omnis veritatis dignissimos rerum amet asperiores id esse aliquam odit eveniet ipsa expedita iusto consequatur modi ratione! Ab veniam aspernatur voluptas."

        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Michael",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit autem fugiat facilis rerum vitae amet excepturi facere. Possimus nam libero, corrupti eum corporis rem suscipit ipsam natus id atque ea facere nesciunt quia tempora error laborum illo? Facere, ipsum! Incidunt quibusdam adipisci aspernatur sequi eum eius facilis officia obcaecati, in non illum temporibus eveniet magnam voluptate earum consectetur consequuntur eligendi dolorum omnis deserunt deleniti alias corrupti aliquid rem. Placeat quo sed omnis libero accusamus eum odit est, delectus et assumenda sint nisi? Ab excepturi hic, ipsam vitae asperiores animi alias quidem, ducimus nihil voluptas porro aspernatur possimus dolore adipisci. Expedita, beatae possimus. Qui veritatis earum nemo esse praesentium dicta facilis quisquam. Accusamus magni hic, error possimus illum minus aut fuga provident, necessitatibus placeat iure vitae libero sed impedit atque tempora, repellendus deserunt veritatis modi iste ad vero quas unde. Omnis sint aliquid similique ratione consectetur quisquam distinctio? Distinctio odio fugit hic eveniet quibusdam accusantium neque unde laborum recusandae quasi mollitia, ad qui adipisci eum blanditiis id, dolores velit, provident consequatur."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstwhere('slug', $slug);
    }
}
