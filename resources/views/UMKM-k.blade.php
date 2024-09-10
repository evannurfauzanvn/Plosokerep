<!DOCTYPE html>
<html lang="id">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnH1z6B8+Zt1Z7gL8b9LaE6A5+aF6rrgh/s3Rqs8pPv1gxd5F2Zwx+wRT7OoXtY/8PeAqTxw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Keranjang Belanja</title>
</head>
<body>
  @include('layout.navbar')
 

  <div class="container mt-5">
    <h3>Keranjang Belanja</h3>
    <div id="cart-items"></div>
    <button id="checkout" class="btn btn-success mt-3">Check Out</button>
  </div>
  @include('layout/copyright')
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const cartItemsContainer = document.getElementById('cart-items');
      const checkoutButton = document.getElementById('checkout');
      let cart = JSON.parse(localStorage.getItem('cart')) || [];

      function renderCart() {
        cartItemsContainer.innerHTML = '';
        if (cart.length === 0) {
          cartItemsContainer.innerHTML = '<p>Keranjang kosong</p>';
        } else {
          cart.forEach((item, index) => {
            cartItemsContainer.innerHTML += `
              <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title">${item.name}</h5>
                  <p class="card-text">Harga: Rp. ${item.price}</p>
                  <p class="card-text">Jumlah: ${item.quantity}</p>
                  <p class="card-text">Total: Rp. ${item.total}</p>
                  <button class="btn btn-danger btn-sm remove-item" data-index="${index}">Hapus</button>
                </div>
              </div>
            `;
          });

          document.querySelectorAll('.remove-item').forEach(button => {
            button.addEventListener('click', function() {
              const index = this.getAttribute('data-index');
              cart.splice(index, 1);
              localStorage.setItem('cart', JSON.stringify(cart));
              renderCart();
            });
          });
        }
      }

      checkoutButton.addEventListener('click', function() {
        // Implementasi checkout dapat ditambahkan di sini
        alert('Checkout berhasil!');
        cart = [];
        localStorage.setItem('cart', JSON.stringify(cart));
        renderCart();
      });

      renderCart();
    });
  </script>
</body>
</html>
