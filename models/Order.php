<?php

class Order {
    public static function createOrder($data) {
        $stmt = DB::connect()->prepare('INSERT INTO product_order (first_name, last_name, product, quantity, price, total, date_order, order_status) VALUES (:first_name, :last_name, :product, :quantity, :price, :total, NOW() , :order_status)');
        $stmt->bindParam(':first_name', $data['first_name']);
        $stmt->bindParam(':last_name', $data['last_name']);
        $stmt->bindParam(':product', $data['product']);
        $stmt->bindParam(':quantity', $data['quantity']);
        $stmt->bindParam(':price', $data['price']);
        $stmt->bindParam(':total', $data['total']);
        // $stmt->bindParam(':date_order', date("Y-m-d H:i:s"));
        $stmt->bindParam(':order_status', $data['order_status']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        // $stmt->close();
        $stmt = null;
    }

    // count all orders Waiting for validation
    public static function countWaitingOrders() {
        $stmt = DB::connect()->prepare('SELECT COUNT(*) AS total FROM product_order WHERE order_status = "Waiting for validation"');
        $stmt->execute();
        $total = $stmt->fetch(PDO::FETCH_OBJ);
        return $total;
        $stmt = null;
    }
    
    // static public function getPendingOrder() {
    //     $stmt = DB::connect()->prepare('SELECT COUNT(order_status) AS pending FROM product_order WHERE order_status = 0');
    //     $stmt->execute();
    //     $pending = $stmt->fetch(PDO::FETCH_OBJ);
    //     return $pending;
    //     $stmt = null;
    // }

    static public function displayOrders() {
        $stmt = DB::connect()->prepare('SELECT * FROM product_order ORDER BY date_order DESC');
        $stmt->execute();
        $orders = $stmt->fetchAll();
        return $orders;
        $stmt = null;
    }
  
}

















// public static function getOrderById($id) {
    //         $stmt = DB::connect()->prepare('SELECT * FROM order WHERE order_id = :id');
    //         $stmt->execute(array(':id' => $id));
    //         $order = $stmt->fetch(PDO::FETCH_OBJ);
    //         return $order;
    //         $stmt = null;
    //     }
    //     public static function getOrderByUserId($id) {
    //         $stmt = DB::connect()->prepare('SELECT * FROM order WHERE user_id = :id');
    //         $stmt->execute(array(':id' => $id));
    //         $order = $stmt->fetchAll();
    //         return $order;
    //         $stmt = null;
    //     }
    //     public static function getOrderByStatus($status) {
    //         $stmt = DB::connect()->prepare('SELECT * FROM order WHERE order_status = :status');
    //         $stmt->execute(array(':status' => $status));
    //         $order = $stmt->fetchAll();
    //         return $order;
    //         $stmt = null;
    //     }
    //     public static function getOrderByDate($date) {
    //         $stmt = DB::connect()->prepare('SELECT * FROM order WHERE order_date = :date');
    //         $stmt->execute(array(':date' => $date));
    //         $order = $stmt->fetchAll();
    //         return $order;
    //         $stmt = null;
    //     }
    //     public static function getOrderByDateRange($date1, $date2) {
    //         $stmt = DB::connect()->prepare('SELECT * FROM order WHERE order_date BETWEEN :date1 AND :date2');
    //         $stmt->execute(array(':date1' => $date1, ':date2' => $date2));
    //         $order = $stmt->fetchAll();
    //         return $order;
    //         $stmt = null;
    
    // }