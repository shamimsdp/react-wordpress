# react-wordpress
A sample project of WordPress with react

## step 1
- install wordpress
- plugin list:
  - JWT Authentication for WP-API
  - Custom Post Type UI
  - Advanced Custom Fields
  - ACF to REST API
## step 2
add below script to `wp-config.php`

`
define('JWT_AUTH_SECRET_KEY', 'secret');`

`define('JWT_AUTH_CORS_ENABLE', true);`

## step 3
install postman

#{url}`/wp-json/wp/v2/posts`
In Header

` Key: Content-Type
Value: application/json`

### For Login
${url} /wp-json/jwt-auth/v1/token
In Header

` Key: Content-Type
Value: application/json`
select Body => Row



`   {
	    "username":"admin",
	    "password":"123456"
    }`
### For Post

select post mathod first

${url}/wp-json/wp/v2/posts

In Header

` Key: Content-Type
Value: application/json`
` Key: Authorization
Value: Bearer token`



    {
      "title": "this is second post",
      "content": "this is second post content",
    	"status": "publish"
    }
    
### Frontend
- `npx create-react-app frontend`
- `npm i axios react-router-dom`
# Resource
https://www.youtube.com/watch?v=fFNXWinbgro
