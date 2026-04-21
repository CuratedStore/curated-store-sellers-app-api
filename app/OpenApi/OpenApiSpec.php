<?php

namespace App\OpenApi;

use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     title="Curated Store Sellers API",
 *     version="1.0.0",
 *     description="Swagger documentation for the Curated Store Sellers API"
 * )
 *
 * @OA\Server(
 *     url="https://sellers-api.curatedstore.in",
 *     description="Production"
 * )
 *
 * @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT"
 * )
 *
 * @OA\Tag(name="Health", description="Service health endpoints")
 * @OA\Tag(name="Auth", description="Authentication endpoints")
 * @OA\Tag(name="Products", description="Seller product management")
 * @OA\Tag(name="Orders", description="Seller order management")
 * @OA\Tag(name="Analytics", description="Seller analytics endpoints")
 * @OA\Tag(name="Account", description="Seller account endpoints")
 *
 * @OA\Get(
 *     path="/api/health",
 *     tags={"Health"},
 *     summary="Health check",
 *     @OA\Response(response=200, description="Service is healthy")
 * )
 *
 * @OA\Post(
 *     path="/api/api/auth/register",
 *     tags={"Auth"},
 *     summary="Register seller",
 *     @OA\Response(response=200, description="Registered")
 * )
 *
 * @OA\Post(
 *     path="/api/api/auth/login",
 *     tags={"Auth"},
 *     summary="Login seller",
 *     @OA\Response(response=200, description="Logged in")
 * )
 *
 * @OA\Get(
 *     path="/api/api/products",
 *     tags={"Products"},
 *     summary="List seller products",
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(response=200, description="Products list")
 * )
 *
 * @OA\Post(
 *     path="/api/api/products",
 *     tags={"Products"},
 *     summary="Create product",
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(response=200, description="Product created")
 * )
 *
 * @OA\Get(
 *     path="/api/api/orders",
 *     tags={"Orders"},
 *     summary="List seller orders",
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(response=200, description="Orders list")
 * )
 *
 * @OA\Put(
 *     path="/api/api/orders/{id}/status",
 *     tags={"Orders"},
 *     summary="Update order status",
 *     security={{"bearerAuth": {}}},
 *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
 *     @OA\Response(response=200, description="Order status updated")
 * )
 *
 * @OA\Get(
 *     path="/api/api/analytics/sales",
 *     tags={"Analytics"},
 *     summary="Sales analytics",
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(response=200, description="Sales metrics")
 * )
 *
 * @OA\Get(
 *     path="/api/api/account/profile",
 *     tags={"Account"},
 *     summary="Get seller profile",
 *     security={{"bearerAuth": {}}},
 *     @OA\Response(response=200, description="Profile payload")
 * )
 */
class OpenApiSpec
{
}
