const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
// Ambil elemen modal
const modal = document.getElementById("imgModal");
const modalImg = document.getElementById("modalImage");
const closeBtn = document.querySelector(".img-modal-close");
// Semua gambar di legality section
const images = document.querySelectorAll(".legality-image img");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
});

// Close menu when clicking on a link
document.querySelectorAll(".nav-link").forEach((n) =>
  n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
  })
);
window.addEventListener("scroll", () => {
  const navbar = document.querySelector(".navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    const targetId = this.getAttribute("href");
    if (targetId.startsWith("#")) {
      e.preventDefault();
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: "smooth",
        });
      }
    }
  });
});

// modal detail image

let scale = 1;
let isDragging = false;
let startX,
  startY,
  translateX = 0,
  translateY = 0;

// Buka modal
images.forEach((img) => {
  img.addEventListener("click", () => {
    modal.style.display = "block";
    modalImg.src = img.src;
    resetZoom();
  });
});

// Tutup modal
closeBtn.addEventListener("click", () => (modal.style.display = "none"));
modal.addEventListener("click", (e) => {
  if (e.target === modal) modal.style.display = "none";
});


  // Klik tombol "Lihat Gambar"
  const modalButtons = document.querySelectorAll(".open-modal-btn");
  modalButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      const imgSrc = btn.getAttribute("data-img");
      modal.style.display = "block";
      modalImg.src = imgSrc;
    });
  });

  // Close
  closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
  });

  modal.addEventListener("click", (e) => {
    if (e.target === modal) modal.style.display = "none";
  });

/* ======================
        ZOOM FUNGSI
  ====================== */

// Scroll untuk zoom
modalImg.addEventListener("wheel", (e) => {
  e.preventDefault();

  if (e.deltaY < 0) scale += 0.1; // zoom in
  else scale = Math.max(1, scale - 0.1); // zoom out, minimal 1x

  updateTransform();
});

// Double click reset zoom
modalImg.addEventListener("dblclick", resetZoom);

/* ======================
        DRAG FUNGSI
  ====================== */

modalImg.addEventListener("mousedown", (e) => {
  if (scale <= 1) return; // tidak bisa drag jika tidak zoom

  isDragging = true;
  startX = e.clientX - translateX;
  startY = e.clientY - translateY;
  modalImg.style.cursor = "grabbing";
});

modalImg.addEventListener("mousemove", (e) => {
  if (!isDragging) return;

  translateX = e.clientX - startX;
  translateY = e.clientY - startY;

  updateTransform();
});

document.addEventListener("mouseup", () => {
  isDragging = false;
  modalImg.style.cursor = "grab";
});

/* ======================
        FUNGSI BANTUAN
  ====================== */

function updateTransform() {
  modalImg.style.transform = `translate(${translateX}px, ${translateY}px) scale(${scale})`;
}

function resetZoom() {
  scale = 1;
  translateX = 0;
  translateY = 0;
  updateTransform();
}