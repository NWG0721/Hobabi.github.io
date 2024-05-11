<footer>
  <?php


  $cDB = new ContactsRepository();
  $res = $cDB->select();
  ?>
  <p class="text-center text-lg text-white mt-4"> &copy; 2024 HoBaBi | همش مال خودمه به شما نمیدم</p>
  <div class="w-full flex flex-row justify-around text-2xl">
    <div class="flex flex-col justify-around text-white mt-10 text-center">
      <p><?php echo$res['CONTENTS_FOOTER']; ?></p>
      <p class="mt-10"><?php echo$res['CONTENTS_FOOTER1']; ?></p>
    </div>
    <div class="flex flex-col justify-around text-white mt-10">
      <p><?php echo$res['CONTENTS_FOOTER2']; ?></p>
      <p class="mt-10"><?php echo$res['CONTENTS_FOOTER3']; ?></p>
    </div>
  </div>
</footer>
</div>
<!-- The Main Body Stops Here -->

<!-- The JavaScripts Part -->
<script src="AppLayer/Javascripts/Script.js"></script>
<!-- The JavaScripts Part -->
</body>

</html>