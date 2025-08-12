/**
 * Hàm này được gọi bởi script của Google sau khi đã tải xong.
 * Nó sẽ tìm phần tử có id 'google_translate_element' và chèn tiện ích vào đó.
 */
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        // Ngôn ngữ gốc của trang web. Rất quan trọng!
        pageLanguage: 'vi',
        
        // Tùy chọn các ngôn ngữ sẽ hiển thị trong danh sách.
        // Để trống mảng này [] để hiển thị tất cả các ngôn ngữ.
        includedLanguages: 'vi,en,fr,ja,ko,zh-CN',

        // Giao diện của widget.
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE,

        // Tự động ẩn banner của Google ở trên cùng.
        autoDisplay: false
    }, 'google_translate_element');
}

// function googleTranslateElementInit() {
//     new google.translate.TranslateElement({
//         pageLanguage: 'vi',
//         layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
//     }, 'google_translate_element');
// }