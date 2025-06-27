<?php

/**
 * Template Name: Contact Details Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main class="l-main-content pt-10 pb-10">
  <!-- Contact Area Start -->
  <section class="flex flex-col items-center w-full py-8 md:py-16 bg-white">
    <div class="w-full px-7 md:px-8 lg:px-0 max-w-[980px]">
      <h2
        class="text-[50px] md:text-[80px] lg:text-[102px] justify-center mb-2 leading-none l-main-content__contact-title-en js-title">
        <span>C</span>
        <span>O</span>
        <span>N</span>
        <span>T</span>
        <span>A</span>
        <span>C</span>
        <span>T</span>
      </h2>
      <p
        class="text-center text-[18px] md:text-[20px] lg:text-[22px] font-bold mb-20 md:mb-32">
        お問い合わせ／内覧お申込み／お申込み
      </p>
      <p
        class="text-center font-medium text-[14px] md:text-[18px] lg:text-[20px] mb-8 md:mb-10">
        お問い合わせ内容をご確認ください。
      </p>

      <form class="w-full">
        <div class="border-t border-b border-black rounded-none">
          <div
            class="flex flex-col md:flex-row items-start md:items-center p-3 md:p-4 md:pr-10 bg-[#EBECEC] border-b border-black">
            <div class="flex items-center w-full md:w-auto mb-2 md:mb-0">
              <label
                class="w-[200px] md:w-[236px] 2xl:w-[250px] 2xl:md:w-[240px] px-2 md:px-4 py-2 md:py-3 text-[14px] md:text-[18px] font-bold text-black"
                for="category">お問い合わせカテゴリー</label>
              <span
                class="text-[12px] md:text-[14px] lg:text-sm text-white bg-[#8e8e8e] px-4 md:px-2 py-[2px] ml-2 mr-4 md:mr-8">必 須</span>
            </div>
            <input
              id="category"
              type="text"
              required
              class="w-full md:flex-1 px-3 py-2 bg-white border-none outline-none text-[14px] md:text-[18px] font-medium"
              readonly />
          </div>
          <div
            class="flex flex-col md:flex-row items-start md:items-center p-3 md:p-4 md:pr-10 bg-[#ededed] border-b border-black">
            <div class="flex items-center w-full md:w-auto mb-2 md:mb-0">
              <label
                class="w-[200px] md:w-[236px] 2xl:w-[250px] 2xl:md:w-[240px] px-2 md:px-4 py-2 md:py-3 text-[14px] md:text-[18px] font-bold text-black"
                for="name">会社名</label>
              <span
                class="text-[12px] md:text-[14px] lg:text-sm px-4 md:px-2 py-[2px] ml-2 mr-4 md:mr-8 font-medium">　 　</span>
            </div>
            <input
              id="company"
              type="text"
              class="w-full md:flex-1 px-3 py-2 bg-white border-none outline-none text-[14px] md:text-[18px]"
              readonly />
          </div>
          <div
            class="flex flex-col md:flex-row items-start md:items-center p-3 md:p-4 md:pr-10 bg-[#ededed] border-b border-black">
            <div class="flex items-center w-full md:w-auto mb-2 md:mb-0">
              <label
                class="w-[200px] md:w-[236px] 2xl:w-[250px] 2xl:md:w-[240px] px-2 md:px-4 py-2 md:py-3 text-[14px] md:text-[18px] font-bold text-black"
                for="name">氏 名</label>
              <span
                class="text-[12px] md:text-[14px] lg:text-sm text-white bg-[#8e8e8e] px-4 md:px-2 py-[2px] ml-2 mr-4 md:mr-8 font-medium">必 須</span>
            </div>
            <input
              id="name"
              type="text"
              required
              class="w-full md:flex-1 px-3 py-2 bg-white border-none outline-none text-[14px] md:text-[18px]"
              readonly />
          </div>
          <div
            class="flex flex-col md:flex-row items-start md:items-center p-3 md:p-4 md:pr-10 bg-[#ededed] border-b border-black">
            <div class="flex items-center w-full md:w-auto mb-2 md:mb-0">
              <label
                class="w-[200px] md:w-[236px] 2xl:w-[250px] 2xl:md:w-[240px] px-2 md:px-4 py-2 md:py-3 text-[14px] md:text-[18px] font-bold text-black"
                for="furigana">ふりがな</label>
              <span
                class="text-[12px] md:text-[14px] lg:text-sm text-white bg-[#8e8e8e] px-4 md:px-2 py-[2px] ml-2 mr-4 md:mr-8 font-medium">必 須</span>
            </div>
            <input
              id="furigana"
              type="text"
              required
              class="w-full md:flex-1 px-3 py-2 bg-white border-none outline-none text-[14px] md:text-[18px]"
              readonly />
          </div>
          <div
            class="flex flex-col md:flex-row items-start md:items-center p-3 md:p-4 md:pr-10 bg-[#ededed] border-b border-black">
            <div class="flex items-center w-full md:w-auto mb-2 md:mb-0">
              <label
                class="w-[200px] md:w-[236px] 2xl:w-[250px] 2xl:md:w-[240px] px-2 md:px-4 py-2 md:py-3 text-[14px] md:text-[18px] font-bold text-black"
                for="tel">電話番号</label>
              <span
                class="text-[12px] md:text-[14px] lg:text-sm text-white bg-[#8e8e8e] px-4 md:px-2 py-[2px] ml-2 mr-4 md:mr-8 font-medium">必 須</span>
            </div>
            <input
              id="tel"
              type="tel"
              required
              class="w-full md:flex-1 px-3 py-2 bg-white border-none outline-none text-[14px] md:text-[18px]"
              readonly />
          </div>
          <div
            class="flex flex-col md:flex-row items-start md:items-center p-3 md:p-4 md:pr-10 bg-[#ededed] border-b border-black">
            <div class="flex items-center w-full md:w-auto mb-2 md:mb-0">
              <label
                class="w-[200px] md:w-[236px] 2xl:w-[250px] 2xl:md:w-[240px] px-2 md:px-4 py-2 md:py-3 text-[14px] md:text-[18px] font-bold text-black"
                for="email">メールアドレス</label>
              <span
                class="text-[12px] md:text-[14px] lg:text-sm text-white bg-[#8e8e8e] px-4 md:px-2 py-[2px] ml-2 mr-4 md:mr-8 font-medium">必 須</span>
            </div>
            <input
              id="email"
              type="email"
              required
              class="w-full md:flex-1 px-3 py-2 bg-white border-none outline-none text-[14px] md:text-[18px]"
              readonly />
          </div>
          <div
            class="flex flex-col md:flex-row items-start p-3 md:p-4 md:pr-10 bg-[#ededed]">
            <div class="flex items-start w-full md:w-auto mb-2 md:mb-0">
              <label
                class="w-[200px] md:w-[236px] 2xl:w-[250px] 2xl:md:w-[240px] px-2 md:px-4 py-2 md:py-3 text-[14px] md:text-[18px] font-bold text-black"
                for="message">問い合わせ内容</label>
              <span
                class="text-[12px] md:text-[14px] lg:text-sm text-white bg-[#8e8e8e] px-4 md:px-2 py-[2px] ml-2 mr-4 md:mr-8 mt-3 font-medium">必 須</span>
            </div>
            <textarea
              id="message"
              required
              readonly
              rows="7"
              class="w-full md:flex-1 px-3 py-2 mt-0 md:mt-3 bg-white border-none outline-none text-[14px] md:text-[18px] resize-none"></textarea>
          </div>
        </div>

        <div class="flex justify-center mt-28 md:mt-32 lg:mt-20">
          <button
            type="submit"
            class="w-[250px] md:w-[350px] 2xl:w-[400px] h-25 md:h-25 bg-[#0041FF] text-white text-[16px] md:text-[20px] lg:text-[20px] font-medium rounded-full flex items-center justify-between px-8 hover:bg-blue-800 transition">
            <span class="mx-auto block w-full text-center">送 信</span>

            <span class="text-lg md:text-xl lg:text-xl">&#9654;</span>
          </button>
          <div
            id="toast"
            class="hidden fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded shadow-lg flex items-center gap-4 z-1001">

            <svg
              class="animate-spin h-6 w-6 text-white"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24">
              <circle
                class="opacity-25"
                cx="12"
                cy="12"
                r="10"
                stroke="currentColor"
                stroke-width="4"></circle>
              <path
                class="opacity-75"
                fill="currentColor"
                d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
            </svg>
            <span>送信が完了しました！</span>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- Contact Area End -->
</main>

<script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.24/bundled/lenis.min.js"></script>
<script>
  const lenis = new Lenis({
    duration: 1.2,
    smooth: true,
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }

  requestAnimationFrame(raf);
</script>
<script>
  window.addEventListener("DOMContentLoaded", () => {
    // Load data from localStorage
    const data = JSON.parse(localStorage.getItem("contactForm") || "{}");
    if (data) {
      document.getElementById("category").value = data.category || "";
      document.getElementById("company").value = data.company || "";
      document.getElementById("name").value = data.name || "";
      document.getElementById("furigana").value = data.furigana || "";
      document.getElementById("tel").value = data.tel || "";
      document.getElementById("email").value = data.email || "";
      document.getElementById("message").value = data.message || "";
    }
    // Make all input fields black text
    document
      .querySelectorAll("input[readonly], textarea[readonly], textarea")
      .forEach((el) => {
        el.classList.add("text-black");
      });
  });

  // Show toast on submit, then redirect to contact.html after 2s
  document.querySelector("form").addEventListener("submit", function(e) {
    e.preventDefault();
    const toast = document.getElementById("toast");
    toast.classList.remove("hidden");
    setTimeout(() => {
      toast.classList.add("hidden");
      window.location.href = "contact";
    }, 3000);
  });
</script>

<?php
get_footer();
