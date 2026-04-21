# Sellers App API

RESTful API for the Curated Store Sellers Mobile App built with Laravel 12.

## Setup

### Prerequisites
- PHP 8.2+
- Composer
- MySQL/MariaDB

### Installation

1. Install dependencies:
```bash
composer install
```

2. Copy `.env.example` to `.env` and configure:
```bash
cp .env.example .env
php artisan key:generate
```

3. Set up database:
```bash
php artisan migrate
php artisan db:seed
```

4. Start development server:
```bash
php artisan serve
```

## API Endpoints

### Authentication
- `POST /api/auth/register` - Seller registration
- `POST /api/auth/login` - Seller login
- `POST /api/auth/logout` - Logout
- `POST /api/auth/refresh` - Refresh token

### Products
- `GET /api/products` - List seller's products
- `POST /api/products` - Create new product
- `PUT /api/products/{id}` - Update product
- `DELETE /api/products/{id}` - Delete product
- `GET /api/categories` - Get available categories

### Orders
- `GET /api/orders` - Get seller's orders
- `GET /api/orders/{id}` - Get order details
- `PUT /api/orders/{id}/status` - Update order status
- `POST /api/orders/{id}/reject` - Reject order with reason

### Sales & Analytics
- `GET /api/analytics/sales` - Sales summary
- `GET /api/analytics/top-products` - Top selling products
- `GET /api/analytics/revenue` - Revenue data

### Account
- `GET /api/account/profile` - Get seller profile
- `PUT /api/account/profile` - Update profile
- `GET /api/account/bank-details` - Get bank info
- `PUT /api/account/bank-details` - Update bank info

## Testing

Run tests with:
```bash
php artisan test
```
