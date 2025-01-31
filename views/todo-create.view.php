<?php
  include 'views/partials/header.php';
  include 'views/partials/nav.php';
  include 'views/partials/title.php';
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form method="POST" class="space-y-6">
      <div>
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input type="text" name="title" id="title" required class="mt-1 block w-full px-3 py-2 text-base rounded-md border-2 border-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
      </div>

      <div>
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <textarea name="description" id="description" rows="4" required class="mt-1 block w-full px-3 py-2 text-base rounded-md border-2 border-gray-400 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
      </div>

      <button type="submit" class="bg-indigo-600 text-white px-6 py-3 text-base rounded-md hover:bg-indigo-700">Create Todo</button>
    </form>
  </div>
</main>

<?php
  include 'views/partials/footer.php';
?>
