#api

###前端

1. 首页 Products

	__get__  [http://pos-mobile.test](http://pos-mobile.test)
	
	```javascript
	{ path:'/', redirect:'/product/'},
	{name:'product', path:'/product/', component:Product},
	```
	直接返回 products 页，显示所有产品列表。
	跳转值后端 ==ProductController== 的 ==index== 方法
	
	```php
	Route::get('/price','ProductController@index');//获取全部产品
	```



2. Tasks

	__get__ [http://pos-mobile.test/#/task/](http://pos-mobile.test/#/task/)
	
	```javascript
	{name:'task', path:'/task', component:Task},
	
	```
	返回 tasks list, 跳转至  ==TaskController== 的 ==index== 方法
	
	```php
		Route::get('/task','TaskController@index');//获取全部任务
	```

3. 创建Task

	__get__ [http://pos-mobile.test/#/task/product/1](http://pos-mobile.test/#/task/product/1)
	__params:__ id=1
	
	```javascript
	{name:'taskBooking', path:'/task/product/:id', component:TaskDetail},
	```
	创建 product 为 1 的 task；
	跳转之 ==TaskDetail.vue==  
	> 该页面获取 指定参数的 product_info； 
	输入电话号码后端查询用户信息

4. phone_number 查询 customer_info
	
	异步请求
	__get__ ['api/v1/customer/query?phone='+ this.phone](api/v1/customer/query?phone=02108162452)
	__params:__ phone = 02108162452
	>todo：
	改为 post；假如 setTimeout 定时器，减少服务器访问次数。
	
	请求返回 ==CustomerController== 的 ==query== 方法
		
	```php
Route::get('/customer/query','CustomerController@query');// 客户 电话 查询	
	```
	



