<?php if (isset($component)) { $__componentOriginalfe9e0c829c4c4b45cae7abeabb8a170e44796ba1 = $component; } ?>
<?php $component = App\View\Components\LogoutLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('logout-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\LogoutLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <style>
    body {
        background: linear-gradient(to bottom, #0072ff, #f4d03f);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        flex-direction: column;
        margin: 0;
    }

    .logo {
        font-size: 80px;
        font-weight: bold;
        color: white;
        text-align: center;
        line-height: 1.2;
        margin-bottom: 20px;
    }

    .logo-subtext {
        font-size: 18px;
        font-weight: normal;
        color: rgba(255, 255, 255, 0.8);
        margin-top: 5px;
    }

    .login-box {
        background-color: rgba(255, 255, 255, 0.6);
        padding: 35px;
        border-radius: 12px;
        width: 380px;
        text-align: center;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }

    .login-title {
        font-size: 22px;
        color: #333;
        margin-bottom: 20px;
    }

    .input-box {
        width: 100%;
        padding: 12px;
        margin-top: 12px;
        border: 2px solid #a5d6a7;
        border-radius: 6px;
        background: white;
        font-size: 16px;
    }

    .login-button {
        background-color: #e74c3c;
        color: white;
        padding: 14px;
        width: 100%;
        border: none;
        border-radius: 6px;
        margin-top: 20px;
        cursor: pointer;
        font-size: 18px;
        font-weight: bold;
        transition: background 0.3s ease;
    }

    .login-button:hover {
        background-color: #c0392b;
    }

    .register-link {
        color: white;
        text-decoration: none;
        display: block;
        margin-top: 12px;
        font-size: 15px;
    }

    .register-link:hover {
        text-decoration: underline;
    }

    .alert {
        color: red;
        font-size: 14px;
        margin-bottom: 20px;
    }
  </style>

  <div class="login-box">
      <h2 class="login-title">AtlasSNSへようこそ</h2>

      <!-- ログインフォーム -->
      <form action="<?php echo e(route('login')); ?>" method="POST">
          <?php echo csrf_field(); ?> <!-- CSRFトークンを埋め込む -->

          <!-- エラーメッセージの表示 -->
          <?php if($errors->any()): ?>
              <div class="alert">
                  <ul>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li><?php echo e($error); ?></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
              </div>
          <?php endif; ?>

          <label for="email">メールアドレス</label>
          <input type="email" name="email" id="email" class="input-box" required>

          <label for="password">パスワード</label>
          <input type="password" name="password" id="password" class="input-box" required>

          <button type="submit" class="login-button">ログイン</button>
      </form>

      <p><a href="<?php echo e(route('register')); ?>" class="register-link">新規ユーザーの方はこちら</a></p>
  </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe9e0c829c4c4b45cae7abeabb8a170e44796ba1)): ?>
<?php $component = $__componentOriginalfe9e0c829c4c4b45cae7abeabb8a170e44796ba1; ?>
<?php unset($__componentOriginalfe9e0c829c4c4b45cae7abeabb8a170e44796ba1); ?>
<?php endif; ?>
<?php /**PATH C:\Users\yc2b4\OneDrive\Desktop\AtlasSNS_DaisukeTanaka\resources\views/auth/login.blade.php ENDPATH**/ ?>