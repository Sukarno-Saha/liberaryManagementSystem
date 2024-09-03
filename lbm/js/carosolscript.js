document.addEventListener("DOMContentLoaded", function () {
  const thumbnailItems = document.querySelectorAll(".thumbnail .items");
  const mainItems = document.querySelectorAll(".carousol .list .item");

  // Set the first item as active by default
  if (mainItems.length > 0) {
    mainItems[0].classList.add("active");
  }

  thumbnailItems.forEach((item, index) => {
    item.addEventListener("click", function () {
      // Remove 'active' class from all main items
      mainItems.forEach((el) => el.classList.remove("active"));

      // Add 'active' class to the corresponding main item
      if (mainItems[index]) {
        mainItems[index].classList.add("active");
      }
    });
  });
});
