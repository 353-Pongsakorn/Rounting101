export default function Show({ product }) {
    return (
        <div className="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <div className="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:items-start">
                <div className="lg:col-start-1 lg:row-start-1 lg:row-span-2">
                    <img
                        src={product.image}
                        alt={product.name}
                        className="w-full h-full object-center object-cover rounded-lg"
                    />
                </div>
                <div className="mt-4 lg:mt-0 lg:col-start-2 lg:row-start-1">
                    <h1 className="text-3xl font-extrabold tracking-tight text-gray-900">{product.name}</h1>
                    <p className="mt-2 text-lg text-gray-500">{product.description}</p>
                    <p className="mt-4 text-2xl text-gray-900">${product.price}</p>
                </div>
            </div>
        </div>
    );
}
