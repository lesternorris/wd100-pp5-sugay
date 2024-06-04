<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">My Cart</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        include "admin/pp5_db.php";
        // session_start();
        $id = $_SESSION['id'];
        $orderQuery = "SELECT * FROM user_tbl INNER JOIN order_tbl ON user_tbl.User_ID = order_tbl.order_user_id WHERE order_tbl.order_user_id = $id";
        $orderResult = mysqli_query($conn, $orderQuery);

        $totalPrice = 0;
        while ($orderShow = mysqli_fetch_assoc($orderResult)) {
            $totalPrice += $orderShow['product_price'];
            echo "
            <div class='row align-items-center mb-3'>
              <div class='col-4'><img class='w-100' src='admin/{$orderShow['product_image']}' alt='Product image'></div>
              <div class='col-6'>
                <h5>{$orderShow['product_name']}</h5>
                <p class='mb-1'>&#36;{$orderShow['product_price']}</p>
              </div>
              <div class='col-2'>
                <form action='remove_item.php' method='POST'>
                  <input type='hidden' name='product_id' value='{$orderShow['order_id']}'>
                  <button type='submit' class='btn btn-danger btn-sm'>Remove</button>
                </form>
              </div>
            </div>
            <hr>";
        }
        ?>
        <div class="row">
          <div class="col-12 text-end">
            <h4>Total Price: $<?php echo $totalPrice; ?></h4>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="confirmation_page.php" class="btn btn-primary">Check Out</a>
      </div>
    </div>
  </div>
</div>