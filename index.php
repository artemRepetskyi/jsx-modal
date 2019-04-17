<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="css/jsx-modal.css">
  <link rel="stylesheet" href="css/test.css">
</head>
<body> 
  <?php echo "ECCHOOOOOO"; ?>
  <p class="test-jsx-modal-text">
    Это простое, и понятное окно для роботы! БОДДДЯЯЯН
    <br>
    Настраюй под себя
  </p>




  <p class="test-jsx-modal-click" data-jsx-modal-target="name">CLICK</p>



<!-- ШАБЛОН -->
  <div class="jsx-modal" data-jsx-modal-id="name">
    <div class="jsx-modal__block test-jsx-modal">
      <div class="jsx-modal__close test-jsx-modal__close">X</div>
      ОКНО
    </div>
  </div>
<!-- ШАБЛОН -->


  


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jsx-modal.js"></script>
  <script src="js/main.js"></script>
</body>
</html>