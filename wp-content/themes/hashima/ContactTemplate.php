<?php

/**
 * Template Name: Contact Template
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
                class="text-center font-medium text-[14px] md:text-[18px] lg:text-[20px] mb-10 md:mb-10">
                メールフォームにてお気軽にお問い合わせください。
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
                                class="text-[12px] md:text-[14px] lg:text-sm text-white bg-[#8e8e8e] px-4 md:px-2 py-[2px] ml-2 mr-4 md:mr-8 font-medium">必 須</span>
                        </div>
                        <select
                            id="category"
                            required
                            class="w-full md:flex-1 px-3 py-2 bg-white border-none outline-none text-[14px] md:text-[18px]">
                            <option value="">以下から選択してください</option>
                            <option value="レンタルバイクガレージについて">
                                レンタルバイクガレージについて
                            </option>
                            <option value="レンタルバイクガレージ内覧について">
                                レンタルバイクガレージ内覧について
                            </option>
                            <option value="レンタルバイクガレージ申し込みについて">
                                レンタルバイクガレージ申し込みについて
                            </option>
                            <option value="レンタルスペースについて">
                                レンタルスペースについて
                            </option>
                            <option value="レンタルキッチントレーラーについて">
                                レンタルキッチントレーラーについて
                            </option>
                            <option value="レンタルキッチントレーラーについて">
                                HASHIMA BASEでの撮影について
                            </option>
                        </select>
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
                            class="w-full md:flex-1 px-3 py-2 bg-white border-none outline-none text-[14px] md:text-[18px]" />
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
                            class="w-full md:flex-1 px-3 py-2 bg-white border-none outline-none text-[14px] md:text-[18px]" />
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
                            class="w-full md:flex-1 px-3 py-2 bg-white border-none outline-none text-[14px] md:text-[18px]" />
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
                            class="w-full md:flex-1 px-3 py-2 bg-white border-none outline-none text-[14px] md:text-[18px]" />
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
                            class="w-full md:flex-1 px-3 py-2 bg-white border-none outline-none text-[14px] md:text-[18px]" />
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
                            rows="7"
                            class="w-full md:flex-1 px-3 py-2 mt-0 md:mt-3 bg-white border-none outline-none text-[14px] md:text-[18px] resize-none"></textarea>
                    </div>
                </div>
                <div class="mt-20 pr-8 md:mt-8">
                    <p
                        class="text-[16px] md:text-[18px] lg:text-[18px] font-bold mb-6 md:mb-4">
                        個人情報保護
                    </p>
                    <p
                        class="text-[14px] md:text-[18px] font-normal mb-10 md:mb-16 lg:mb-3">
                        ここで入力された情報で個人情報にあたるものは、「プライバシーポリシー」に従って利用させていただきます。<br />
                        同意いただける方は「入力内容確認画面へ」と進んでください。
                    </p>
                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            id="checkboxInput"
                            class="peer" />
                        <label for="checkboxInput" class="flex items-center cursor-pointer">
                            <div class="relative w-6 h-6 md:w-6 md:h-6 lg:w-4 lg:h-4">
                                <!-- Outer circle -->
                                <div class="absolute inset-0 border border-black rounded-full"></div>
                                <!-- Inner circle (shown only if checked) -->
                                <div
                                    class="absolute top-1 left-1 right-1 md:right-[3px] xl:right-1 bottom-1 border border-black rounded-full inner-circle"></div>

                            </div>
                            <span class="text-[14px] md:text-[18px] lg:text-[18px] font-normal ml-2">
                                プライバシーポリシーに同意する
                            </span>
                        </label>
                    </div>

                </div>

                <div class="flex justify-center mt-28 md:mt-32 lg:mt-20">
                    <button
                        type="submit"
                        id="submit-button"
                        class="w-[250px] md:w-[320px] 2xl:w-[400px] h-25 md:h-25 bg-[#595757] text-white text-[16px] md:text-3xl lg:text-lg font-medium rounded-full flex items-center text-center justify-between px-8 hover:bg-[#0041FF] transition large-screen-button">
                        <span class="mx-auto block w-full text-center">入力内容確認画面</span>
                        <span class="text-lg md:text-3xl lg:text-xl">&#9654;</span>
                    </button>
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
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector("form").addEventListener("submit", function(e) {
            e.preventDefault();
            const selected =
                document.querySelector(".inner-circle.bg-black") !== null;
            // Collect form data
            if (!selected) {
                alert("プライバシーポリシーに同意してください。");
                return;
            }
            const data = {
                category: document.getElementById("category").value,
                company: document.getElementById("company").value,
                name: document.getElementById("name").value,
                furigana: document.getElementById("furigana").value,
                tel: document.getElementById("tel").value,
                email: document.getElementById("email").value,
                message: document.getElementById("message").value,
                privacy: selected,
            };
            // Save to localStorage
            localStorage.setItem("contactForm", JSON.stringify(data));
            // Redirect
            window.location.href = "contact-details";
        });
    });

    document.getElementById('checkboxInput').addEventListener('change', function() {
        const inner = document.querySelector(".inner-circle");
        
        if (this.checked) {
            inner.classList.add("bg-black"); 
        } else {
            inner.classList.remove("bg-black"); 
        }
    });
</script>
<script>
    let isScrolling;
    const submitButton = document.querySelector("#submit-button");

    window.addEventListener("scroll", () => {
        if (submitButton) {
            submitButton.disabled = true;
        }

        clearTimeout(isScrolling);

        isScrolling = setTimeout(() => {
            if (submitButton) {
                submitButton.disabled = false;
            }
        }, 200);
    });
</script>

<?php
get_footer();
