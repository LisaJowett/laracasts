<?php require("views/partials/header.php") ?>
<?php require("views/partials/nav.php") ?>
<?php require("views/partials/banner.php") ?>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <form method="POST">
  <div class="space-y-12">
        <div class="col-span-full">
          <label for="body" class="block text-sm/6 font-medium text-white">Body</label>
          <div class="mt-2">
            <textarea 
              id="body" 
              name="body" 
              rows="3" 
              class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
              placeholder="Write your note here!"
              required
            ><?= isset($_POST['body']) ? $_POST['body'] : '' ?></textarea>

            <?php if (isset($errors['body'])) : ?>
              <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
            <?php endif; ?>
          </div>
        </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
  </div>
</form>
    </div>
  </main>

  <?php require("views/partials/footer.php") ?>