import React from 'react';
import { Link } from "@inertiajs/react";

const products = [
    {
      id: 1,
      name: 'skateboard',
      href: '#',
      imageSrc: 'https://contents.mediadecathlon.com/p2379505/k$1faa81ab0e134c517095770aca62b537/kids-3-7-years-skateboard-play-120-zodiac-niu-oxelo-8640793.jpg?f=1920x0&format=auto',
      imageAlt: "",
      price: '$105',
      color: 'Black and Yellow',
    },
    {
        id: 2,
      name: 'Classic Rollerball Pen',
      href: '#',
      imageSrc: 'https://d1o785do8fyxgx.cloudfront.net/stock_item/stock_item_images/images/000/000/559/original/EMP_PEN_ROLLERBALL_GROOVE_TEAL_1_ECOMM_RESIZED.png?1676473644',
      imageAlt: "",
      price: '$5',
      color: 'Green and Gold',
    },
    {
        id: 3,
      name: 'Book',
      href: '#',
      imageSrc: 'https://dictionary.cambridge.org/images/thumb/book_noun_001_01679.jpg?version=6.0.43',
      imageAlt: "",
      price: '$15',
      color: 'Blue',
    },
    {
        id: 4,
      name: 'Plain White Art Paper',
      href: '#',
      imageSrc: 'https://5.imimg.com/data5/HC/KF/HZ/SELLER-4619430/white-art-paper.jpg',
      imageAlt: "",
      price: '$1 sheet per 1 piece',
      color: 'White',
    },
    {
        id: 5,
      name: 'Wine Glass',
      href: '#',
      imageSrc: 'https://www.barlens.com.au/wp-content/uploads/2019/08/CA0075003-_Wine-Glass-Breeze-350ml1.jpg',
      imageAlt: "",
      price: '$75',
      color: '',
    },
    {
        id: 6,
      name: 'Beats Studio Pro Wireless Headphones',
      href: '#',
      imageSrc: 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/MQTR3?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1687660671097',
      imageAlt: "",
      price: '$575',
      color: 'Sandstone',
    },
    {
        id: 7,
      name: 'Wilson Nba 29.5" Basketball',
      href: '#',
      imageSrc: 'https://target.scene7.com/is/image/Target/GUEST_20affc7e-e0d7-4eb6-a6f3-68d13520f8be?wid=488&hei=488&fmt=pjpeg',
      imageAlt: "",
      price: '$100',
      color: 'Orange',
    },
    {
        id: 8,
      name: 'Bruton Trendy Sports Shoes For Men',
      href: '#',
      imageSrc: 'https://www.jiomart.com/images/product/original/rvrgwpjvsp/bruton-trendy-sports-shoes-for-men-blue-product-images-rvrgwpjvsp-0-202209021256.jpg?im=Resize=(1000,1000)',
      imageAlt: "",
      price: '$750',
      color: 'Blue',
    },
    {
        id: 9,
      name: 'Apple Watch Series 10 GPS 42mm',
      href: '#',
      imageSrc: 'https://www.imagineonline.store/cdn/shop/files/Apple_Watch_Series_10_42mm_GPS_Silver_Aluminium_Sport_Band_Denim_PDP_Image_Position_1__en-IN_f7f0d700-c9f3-4393-8459-5cb84603f753.jpg?v=1727257021',
      imageAlt: "",
      price: '$849',
      color: 'Silver',
    },
    {
        id: 10,
      name: 'Sparkling Infinity Heart Collier Necklace',
      href: '#',
      imageSrc: 'https://th.pandora.net/dw/image/v2/BJRN_PRD/on/demandware.static/-/Sites-pandora-master-catalog/default/dw895eef59/productimages/singlepackshot/362666C01_RGB.jpg?sw=900&sh=900&sm=fit&sfrm=png&bgcolor=F5F5F5',
      imageAlt: "",
      price: '$499',
      color: 'Gold plated',
    }

  ]
  
  export default function Example() {
    return (
        <div className="bg-white">
        <div className="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
          <h2 className="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>
  
          <div className="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            {products.map((product) => (
              <div key={product.id} className="group relative">
                <img
                  alt={product.imageAlt}
                  src={product.imageSrc}
                  className="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80"
                />
                <div className="mt-4 flex justify-between">
                  <div>
                    <h3 className="text-sm text-gray-700">
                      <Link href={`/products/${product.id}`}>
                        <span aria-hidden="true" className="absolute inset-0" />
                        {product.name}
                      </Link>
                    </h3>
                    <p className="mt-1 text-sm text-gray-500">{product.color}</p>
                  </div>
                  <p className="text-sm font-medium text-gray-900">{product.price}</p>
                </div>
              </div>
            ))}
          </div>
        </div>
      </div>
    );
  }


