document.addEventListener("DOMContentLoaded", function () {
  const video = document.getElementById("promoVideo");
  const playBtn = document.getElementById("playBtn");
  const pulseRing = document.getElementById("pulseRing");

  // Saat tombol play diklik
  playBtn.addEventListener("click", function () {
    video.classList.remove("hidden");
    playBtn.classList.add("hidden");
    pulseRing.classList.add("hidden");
    video.play();
  });

  // Fungsi untuk mengembalikan ke tampilan awal
  function resetToInitialState() {
    video.pause();
    video.classList.add("hidden");
    playBtn.classList.remove("hidden");
    pulseRing.classList.remove("hidden");
    video.currentTime = 0; // reset posisi video ke awal
  }

  // Saat video selesai diputar
  video.addEventListener("ended", resetToInitialState);

  // Saat video dipause manual oleh user
  video.addEventListener("pause", () => {
    if (!video.ended) {
      resetToInitialState();
    }
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.remove('opacity-0');
        entry.target.classList.remove('translate-x-[-50px]');
        entry.target.classList.remove('translate-x-[50px]');
        entry.target.classList.add('opacity-100');
        entry.target.classList.add('translate-x-0');
        observer.unobserve(entry.target); // hanya animasi sekali
      }
    });
  }, { threshold: 0.2 });

  const left = document.getElementById('animate-left');
  const right = document.getElementById('animate-right');

  if (left) observer.observe(left);
  if (right) observer.observe(right);
});

document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.remove('opacity-0');
        entry.target.classList.remove('-translate-x-12');
        entry.target.classList.remove('translate-x-12');
        entry.target.classList.add('opacity-100');
        entry.target.classList.add('translate-x-0');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  ['animate-left-1', 'animate-right-1', 'animate-left-2', 'animate-right-2'].forEach(id => {
    const el = document.getElementById(id);
    if (el) observer.observe(el);
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.remove('opacity-0', 'translate-y-12');
        entry.target.classList.add('opacity-100', 'translate-y-0');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  ['fade-up-1', 'fade-up-2', 'fade-up-3'].forEach(id => {
    const el = document.getElementById(id);
    if (el) observer.observe(el);
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.remove('opacity-0', 'translate-y-12');
        entry.target.classList.add('opacity-100', 'translate-y-0');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  ['fade-up-portfolio-1', 'fade-up-portfolio-2', 'fade-up-portfolio-3'].forEach(id => {
    const el = document.getElementById(id);
    if (el) observer.observe(el);
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.remove('opacity-0', 'translate-y-12');
        entry.target.classList.add('opacity-100', 'translate-y-0');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  ['fade-up-paket-1', 'fade-up-paket-2', 'fade-up-paket-3'].forEach(id => {
    const el = document.getElementById(id);
    if (el) observer.observe(el);
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const formObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.remove('opacity-0', 'translate-y-12');
        entry.target.classList.add('opacity-100', 'translate-y-0');
        formObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  const formSection = document.getElementById('form-container');
  if (formSection) formObserver.observe(formSection);
});
