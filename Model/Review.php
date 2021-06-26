<?php
    include_once("Model/DataProvider.php");
    class Review
    {
        private $da; //biến kết nối dữ liệu
        public function __construct()
        {
            $this->da=new DataProvider();
        }
        public function getReview()
        {
            $sql = "Select * from product_reviews";
            return $this->da->FetchAll($sql);
        }
        public function getReviewManage()
        {
            $sql = "SELECT products.ProductName , users.UserName, product_reviews.ReviewID,product_reviews.rate,product_reviews.review FROM product_reviews,products,users WHERE product_reviews.ProductID = products.ProductID AND product_reviews.UserID = users.UserID";
            return $this->da->FetchAll($sql);
        }
        public function InsertReviews($ProductID,$rate, $review)
        {
            $sql = "Insert into product_reviews(ProductID,UserID,rate,review) values ($ProductID,40,$rate,'$review')";
            return $this->da->ExecuteQuery($sql);
        }
        // Tình tổng số rate:
        public function sumRating() {
            $sql="SELECT SUM(product_reviews.rate) AS Tong FROM `product_reviews` , products WHERE product_reviews.ProductID=products.ProductID";
            return $this->da->NumRows($sql);
        }
        // Đếm số rating
        public function totalRating() {
            $sql="SELECT COUNT(*) FROM `product_reviews` , products WHERE product_reviews.ProductID = products.ProductID";
            return $this->da->NumRows($sql);
        }
        
    }
