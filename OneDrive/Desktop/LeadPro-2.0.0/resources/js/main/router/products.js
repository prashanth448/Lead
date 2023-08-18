import Admin from '../../common/layouts/Admin.vue';
import Product from '../views/product/index.vue';

export default [
	{
		path: '/',
		component: Admin,
		children: [
			{
				path: '/admin/product',
				component: Product,
				name: 'admin.products.index',
				meta: {
					requireAuth: true,
					menuParent: "product",
					menuKey: route => "products",
				}
			}
		]

	}
]