<h1>TODO</h1>
<form action="/todo" method="POST">
  <input type="text" name="todo"  placeholder="Enter ut task" />
  <button type="submit">Enter</button>
</form>
<ul class="list">
  <?php foreach ($variables['items'] as $item) : ?>
    <li class='item'>
  <?php if ($item->getStatus()): ?>
     <a class='done text-decoration-none' href='/todo?id=<?=$item->getId()?>&status=<?=$item->getStatus()?>'><?php print $item->getTask();?></a>
  <?php endif; ?>
  <?php if (!$item->getStatus()): ?>
      <a class='process' href='/todo?id=<?=$item->getId()?>&status=<?=$item->getStatus()?>'><?php print $item->getTask();?></a>
   <?php endif; ?>
       <a class='delete' href='/todo?id=<?=$item->getId()?>&delete=true'>Delete</a>
    </li>
    <?php endforeach; ?>
</ul>
