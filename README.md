# Laravel 7 發送精美的回應式 HTML 電子郵件

引入 snowfire 的 beautymail 套件來擴增發送精美的回應式 HTML 電子郵件，預覽這些電子郵件，了解郵件在成百上千個裝置、瀏覽器及收件匣中的具體呈現形式。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/mail/welcome/{類型編號}` 來進行發送精美的回應式 HTML 電子郵件。

----

## 畫面截圖
![](https://i.imgur.com/G7ITiaj.png)
> 每個模板都是回應式的，完全可客制的，並且可以針對品牌進行編輯和優化
