# 系統畫面

## ◆首頁
- 商品及圖片輪播、各式商品、註冊會員與登入、查詢功能
  <a href="https://imgur.com/CN9ylQ5"><img src="https://imgur.com/CN9ylQ5.png" title="source: imgur.com" /></a>
  <a href="https://imgur.com/m0D5pJV"><img src="https://imgur.com/m0D5pJV.png" title="source: imgur.com" /></a>  

## ◆商品搜尋
- 所有餐點之瀏覽，顯示價錢及餐點種類
- 查詢並顯示指定的商品價格、明細
  <a href="https://imgur.com/mV6cdDh"><img src="https://imgur.com/mV6cdDh.png" title="source: imgur.com" /></a>
  <a href="https://imgur.com/1INKYlI"><img src="https://imgur.com/1INKYlI.png" title="source: imgur.com" /></a>  

## ◆個別商品頁面
- 挑選商品的頁面
  <a href="https://imgur.com/Y27EBoN"><img src="https://imgur.com/Y27EBoN.png" title="source: imgur.com" /></a>

## ◆購物車
- 欲購買的商品會先加入購物車，並顯示小計與總計，也可選擇繼續購物
  <a href="https://imgur.com/QJ4hLT8"><img src="https://imgur.com/QJ4hLT8.png" title="source: imgur.com" /></a>
  <a href="https://imgur.com/6LEfZvF"><img src="https://imgur.com/6LEfZvF.png" title="source: imgur.com" /></a>

## ◆會員個人資料
- 顯示會員個人資料
  <a href="https://imgur.com/XDkAH3f"><img src="https://imgur.com/XDkAH3f.png" title="source: imgur.com" /></a>

## ◆修改會員個人資料
- 修改會員個人資料
  <a href="https://imgur.com/tCJyeNK"><img src="https://imgur.com/tCJyeNK.png" title="source: imgur.com" /></a>



## ◆後台介面
- 顯示後台介面
  <a href="https://imgur.com/OMlXGZK"><img src="https://imgur.com/OMlXGZK.png" title="source: imgur.com" /></a>

## ◆後台員工管理
- 查看所有員工，可新增、編輯和刪除員工資料
  <a href="https://imgur.com/EkApFJV"><img src="https://imgur.com/EkApFJV.png" title="source: imgur.com" /></a>

## ◆後台會員管理
-  查看所有會員，編輯和刪除會員資料
  <a href="https://imgur.com/1miiGwo"><img src="https://imgur.com/1miiGwo.png" title="source: imgur.com" /></a>

## ◆後台商品管理
- 查看所有商品，可新增、編輯和刪除商品
  <a href="https://imgur.com/enpTjwv"><img src="https://imgur.com/enpTjwv.png" title="source: imgur.com" /></a>

## ◆後台訂單管理
- 查看所有商品，可編輯和刪除商品
  <a href="https://imgur.com/ll81ULF"><img src="https://imgur.com/ll81ULF.png" title="source: imgur.com" /></a>



## 系統名稱及作用

線上購物系統

- 讓使用者透過此系統就可以選購商品

- 讓管理者以此系統管控所有商品的種類與數量

- 管理者以此系統查看所有顧客的購買資料


## 系統的主要功能
★ 前台
- 首頁 (Route::get('/',[HomeController::class, 'index'])->name('home.index');)  [3A832063 林冠宇](https://github.com/3A832063)
- 查詢商品 (Route::get('search',[ProductController::class, "search"])->name("products.search");) [3A832063 林冠宇](https://github.com/3A832063)
- 個別商品資訊 (Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');) [3A832063 林冠宇](https://github.com/3A832063)
- 購物車 (Route::get('/cart_items',[CartItemController::class,'index'])->name('cart_items.index'); ) [3A832063 林冠宇](https://github.com/3A832063)
- 個人資料 (Route::get('user_information',[UserController::class, "show"])->name("users.user_information");) [3A832063 林冠宇](https://github.com/3A832063)
- 修改個人資料 (Route::patch('user_information/{id}', [UserController::class, 'user_information_update'])->name('users.user_information_update');) [3A832063 林冠宇](https://github.com/3A832063)

★ 後台
- 會員管理 (Route::get('members', [AdminMemberController::class, 'index'])->name('admin.members.index');) [3A732087 許家銓](https://github.com/3A732087)
- 餐點管理 (Route::get('menus', [AdminMenuController::class, 'index'])->name('admin.menus.index');) [3A732087 許家銓](https://github.com/3A732087)
- 訂單管理 (Route::get('orderlists', [AdminOrderlistController::class, 'index'])->name('admin.orderlists.index'); ) [3A732087 許家銓](https://github.com/3A732087)

## ERD
<a href="https://imgur.com/bHliZMm"><img src="https://imgur.com/bHliZMm.png" title="source: imgur.com" /></a>


## 關聯式綱要圖
<a href="https://imgur.com/hrjPbB6"><img src="https://imgur.com/hrjPbB6.png" title="source: imgur.com" /></a>


## 實際資料表欄位設計

- 使用者 (users)資料表

<a href="https://imgur.com/TFdhtSS"><img src="https://i.imgur.com/TFdhtSS.png" title="source: imgur.com" /></a>

- 產品 (products)資料表

<a href="https://imgur.com/y5ydQrM"><img src="https://i.imgur.com/y5ydQrM.png" title="source: imgur.com" /></a>

- 購物車 (cart_items)資料表

<a href="https://imgur.com/OVpJgWw"><img src="https://i.imgur.com/OVpJgWw.png" title="source: imgur.com" /></a>

- 訂單 (orders)資料表

<a href="https://imgur.com/gtqYIdm"><img src="https://i.imgur.com/gtqYIdm.png" title="source: imgur.com" /></a>

## 初始專案與DB負責的同學

- 初始專案 [3A732086 胡東霖](https://github.com/3A732086)
- DB [3A732086 胡東霖](https://github.com/3A732086) 、 [3A732087 許家銓](https://github.com/3A732087)



## 額外使用的套件或樣板

- 前台樣板：[Modern Business](https://startbootstrap.com/template/modern-business)

        作為前台頁面使用，畫面簡單乾淨

- 後台樣板：[Sidebar](https://startbootstrap.com/template/simple-sidebar)

        作為後台管理使用，介面清楚明瞭，方便操作


## 系統測試資料存放位置

     final11底下的sql資料夾

## 系統使用者測試帳號

★ 前台

     帳號：aaa123123
     密碼：aaa123123

★ 後台

     帳號：admin
     密碼：12345678


## 系統開發人員與工作分配

[3A732086 胡東霖](https://github.com/3A732086)

      前台管理
      初始專案
      DB 
      readme 撰寫
      登入後判斷身分別進入前台或後台
      登入頁面修改
      個人資料頁面修改
      期中報告製作


[3A732087 許家銓](https://github.com/3A732087)

      後台管理
      前台購物車及訂單查詢
      DB
      期中報告製作
        
