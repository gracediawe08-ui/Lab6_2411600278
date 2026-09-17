<x-app-layout>


<style>
    * {
        box-sizing: border-box;
    }

    html,
    body {
        margin: 0 !important;
        padding: 0 !important;
        background: #FFF7F8 !important;
    }

    body {
        overflow-x: hidden;
        color: #4A3B47;
        font-family: Arial, Helvetica, sans-serif;
    }

    .min-h-screen {
        background: #FFF7F8 !important;
    }

    main {
        margin: 0 !important;
        padding: 0 !important;
        background: #FFF7F8 !important;
    }

    .inventory-app {
        width: 100%;
        min-height: calc(100vh - 64px);
        display: flex;
        background: #FFF7F8;
    }


    .inventory-sidebar {
        width: 245px;
        min-height: calc(100vh - 64px);
        background: linear-gradient(
            180deg,
            #8E5A83 0%,
            #9D6488 48%,
            #E5989B 100%
        );
        color: white;
        padding: 24px 16px;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
    }

    .brand {
        width: 100%;
        text-align: center;
        padding: 10px 5px 24px;
    }

    .brand-title {
        margin: 0;
        font-size: 20px;
        font-weight: 800;
        line-height: 1.2;
    }

    .brand-subtitle {
        margin-top: 7px;
        font-size: 10px;
        opacity: .78;
    }

    .sidebar-line {
        width: 100%;
        height: 1px;
        background: rgba(255,255,255,.18);
        margin: 3px 0 20px;
    }

    .sidebar-label {
        padding: 0 12px;
        margin-bottom: 8px;
        font-size: 9px;
        font-weight: 800;
        letter-spacing: 1px;
        opacity: .62;
    }

    .sidebar-menu {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .sidebar-link {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 13px;
        color: white;
        text-decoration: none;
        border-radius: 12px;
        font-size: 13px;
        font-weight: 600;
        transition: all .2s ease;
    }

    .sidebar-link:hover,
    .sidebar-link.active {
        background: rgba(255,255,255,.18);
        transform: translateX(2px);
    }

    .sidebar-icon {
        width: 28px;
        text-align: center;
        font-size: 17px;
    }

    .sidebar-bottom {
        margin-top: auto;
    }

    .admin-card {
        background: rgba(255,255,255,.13);
        border: 1px solid rgba(255,255,255,.15);
        border-radius: 14px;
        padding: 13px;
        margin-bottom: 10px;
    }

    .admin-name {
        font-size: 12px;
        font-weight: 700;
    }

    .admin-role {
        margin-top: 3px;
        font-size: 10px;
        opacity: .75;
    }

    .logout-button {
        width: 100%;
        border: none;
        cursor: pointer;
        background: rgba(255,255,255,.12);
        color: white;
        padding: 11px;
        border-radius: 11px;
        font-size: 12px;
        font-weight: 700;
    }

    .logout-button:hover {
        background: rgba(255,255,255,.22);
    }


    .inventory-main {
        flex: 1;
        min-width: 0;
        min-height: calc(100vh - 64px);
        padding: 28px 30px 35px;
        background: #FFF7F8;
    }

    .main-container {
        max-width: 1450px;
        width: 100%;
        margin: 0 auto;
    }


    .topbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
    }

    .page-title {
        margin: 0;
        color: #4A3B47;
        font-size: 27px;
        font-weight: 800;
    }

    .page-description {
        margin-top: 5px;
        color: #8A7B86;
        font-size: 13px;
    }

    .add-button {
        display: inline-block;
        background: linear-gradient(
            135deg,
            #8E5A83,
            #E5989B
        );
        color: white;
        text-decoration: none;
        padding: 11px 17px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 800;
        box-shadow: 0 6px 15px rgba(142,90,131,.18);
    }

    .add-button:hover {
        color: white;
        transform: translateY(-1px);
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 16px;
        margin-bottom: 22px;
    }

    .stat-card {
        position: relative;
        overflow: hidden;
        background: white;
        border: 1px solid #F1E5EA;
        border-radius: 17px;
        padding: 20px;
        box-shadow: 0 6px 20px rgba(74,59,71,.055);
    }

    .stat-card::after {
        content: "";
        position: absolute;
        width: 85px;
        height: 85px;
        right: -25px;
        bottom: -25px;
        border-radius: 50%;
        background: #FCE4E8;
        opacity: .7;
    }

    .stat-head {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .stat-label {
        color: #9A8B95;
        font-size: 10px;
        font-weight: 800;
        letter-spacing: .5px;
    }

    .stat-icon {
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 11px;
        font-size: 17px;
    }

    .purple-bg {
        background: #F2E8F0;
        color: #8E5A83;
    }

    .pink-bg {
        background: #FCE4E8;
        color: #C06C84;
    }

    .orange-bg {
        background: #FFF0E1;
        color: #C47732;
    }

    .green-bg {
        background: #EAF6EF;
        color: #4B8B67;
    }

    .stat-number {
        margin-top: 15px;
        color: #4A3B47;
        font-size: 27px;
        font-weight: 800;
    }

    .stat-footer {
        margin-top: 4px;
        color: #9A8B95;
        font-size: 10px;
    }


    .dashboard-card {
        background: white;
        border: 1px solid #F1E5EA;
        border-radius: 18px;
        box-shadow: 0 6px 20px rgba(74,59,71,.055);
    }

    .card-padding {
        padding: 22px;
    }

    .card-title {
        margin: 0;
        color: #4A3B47;
        font-size: 17px;
        font-weight: 800;
    }

    .card-subtitle {
        margin-top: 4px;
        color: #9A8B95;
        font-size: 11px;
    }

    .inventory-tools {
        margin-bottom: 22px;
    }

    .tools-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
        margin-bottom: 17px;
    }

    .view-products {
        color: #8E5A83;
        text-decoration: none;
        font-size: 11px;
        font-weight: 800;
    }

    .view-products:hover {
        color: #C06C84;
    }

    .filters {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
        gap: 10px;
    }

    .filter-control {
        width: 100%;
        border: 1px solid #E8DCE2;
        background: #FFFCFD;
        border-radius: 10px;
        padding: 11px 12px;
        color: #4A3B47;
        font-size: 12px;
        outline: none;
    }

    .filter-control:focus {
        border-color: #E5989B;
        box-shadow: 0 0 0 3px rgba(229,152,155,.10);
    }

    .middle-grid {
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 18px;
        margin-bottom: 22px;
    }

    .low-stock-list {
        margin-top: 12px;
    }

    .low-stock-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        padding: 11px 0;
        border-bottom: 1px solid #F2E9ED;
    }

    .low-stock-item:last-child {
        border-bottom: none;
    }

    .stock-product {
        display: flex;
        align-items: center;
        gap: 10px;
        min-width: 0;
    }

    .product-avatar {
        width: 36px;
        height: 36px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(
            135deg,
            #FCE4E8,
            #F2E8F0
        );
        color: #8E5A83;
        border-radius: 10px;
        font-size: 12px;
        font-weight: 800;
        flex-shrink: 0;
    }

    .product-name-small {
        color: #4A3B47;
        font-size: 12px;
        font-weight: 700;
    }

    .product-sku-small {
        margin-top: 2px;
        color: #9A8B95;
        font-size: 9px;
    }

    .qty-warning {
        background: #FFF0E1;
        color: #C47732;
        padding: 6px 9px;
        border-radius: 15px;
        font-size: 10px;
        font-weight: 800;
        white-space: nowrap;
    }

    .empty-stock {
        padding: 30px 10px;
        text-align: center;
        color: #4B8B67;
        font-size: 11px;
        font-weight: 700;
    }

    .chart-area {
        position: relative;
        height: 260px;
        margin-top: 15px;
    }


    .table-card {
        margin-bottom: 22px;
    }

    .table-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
        margin-bottom: 14px;
    }

    .table-wrapper {
        overflow-x: auto;
    }

    .product-table {
        width: 100%;
        border-collapse: collapse;
    }

    .product-table th {
        padding: 12px 10px;
        text-align: left;
        color: #9A8B95;
        font-size: 9px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: .5px;
        border-bottom: 1px solid #EEE4E9;
    }

    .product-table td {
        padding: 13px 10px;
        color: #4A3B47;
        font-size: 11px;
        border-bottom: 1px solid #F4ECEF;
    }

    .product-table tbody tr:hover td {
        background: #FFFAFC;
    }

    .strong-text {
        font-weight: 800;
    }

    .muted-text {
        color: #93848F;
    }

    .status-badge {
        display: inline-block;
        padding: 5px 8px;
        border-radius: 14px;
        font-size: 9px;
        font-weight: 800;
    }

    .status-in {
        background: #EAF6EF;
        color: #43815E;
    }

    .status-low {
        background: #FFF0E1;
        color: #C47732;
    }

    .status-out {
        background: #FCE7E9;
        color: #C45C67;
    }

    .empty-row {
        padding: 28px !important;
        text-align: center;
        color: #9A8B95 !important;
    }
    
   
    .analytics-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px;
        margin-bottom: 22px;
    }

    .quick-card {
        margin-bottom: 22px;
        padding: 22px;
        color: white;
        background: linear-gradient(
            135deg,
            #8E5A83,
            #C06C84,
            #E5989B
        );
        border-radius: 18px;
        box-shadow: 0 9px 22px rgba(142,90,131,.15);
    }

    .quick-card .card-title,
    .quick-card .card-subtitle {
        color: white;
    }

    .quick-actions {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
        margin-top: 17px;
    }

    .quick-link {
        color: white;
        text-decoration: none;
        text-align: center;
        padding: 14px 8px;
        border: 1px solid rgba(255,255,255,.20);
        background: rgba(255,255,255,.11);
        border-radius: 12px;
        font-size: 10px;
        font-weight: 800;
        transition: .2s ease;
    }

    .quick-link:hover {
        color: white;
        background: rgba(255,255,255,.20);
        transform: translateY(-2px);
    }

    .quick-link-icon {
        display: block;
        margin-bottom: 5px;
        font-size: 19px;
    }


    .report-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
        margin-top: 16px;
    }

    .report-box {
        background: #FFFAFC;
        border: 1px solid #F0E3E8;
        border-radius: 12px;
        padding: 15px;
    }

    .report-label {
        color: #9A8B95;
        font-size: 10px;
    }

    .report-value {
        margin-top: 4px;
        color: #8E5A83;
        font-size: 21px;
        font-weight: 800;
    }

    @media (max-width: 1200px) {

        .inventory-sidebar {
            width: 215px;
        }

        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 950px) {

        .inventory-app {
            display: block;
        }

        .inventory-sidebar {
            width: 100%;
            min-height: auto;
        }

        .sidebar-menu {
            flex-direction: row;
            flex-wrap: wrap;
        }

        .sidebar-bottom {
            margin-top: 20px;
        }

        .middle-grid,
        .analytics-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 700px) {

        .inventory-main {
            padding: 20px 14px 30px;
        }

        .topbar {
            flex-direction: column;
            align-items: flex-start;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }

        .filters {
            grid-template-columns: 1fr;
        }

        .quick-actions {
            grid-template-columns: repeat(2, 1fr);
        }

        .report-grid {
            grid-template-columns: 1fr;
        }
    }
</style>


<div class="inventory-app">

    <aside class="inventory-sidebar">

        <div class="brand">

            <div class="brand-title">
                Hardware<br>
                Inventory System
            </div>

            <div class="brand-subtitle">
                Construction Materials
            </div>

        </div>

        <div class="sidebar-line"></div>

        <div class="sidebar-label">
            MAIN MENU
        </div>

        <div class="sidebar-menu">

            <a
                href="{{ route('dashboard') }}"
                class="sidebar-link active"
            >
                <span class="sidebar-icon">⌂</span>
                Dashboard
            </a>

            <a
                href="{{ route('products.index') }}"
                class="sidebar-link"
            >
                <span class="sidebar-icon">▣</span>
                Products
            </a>

            <a
                href="{{ route('products.create') }}"
                class="sidebar-link"
            >
                <span class="sidebar-icon">＋</span>
                Add Product
            </a>

            <a
                href="{{ route('inventory.index') }}"
                class="sidebar-link"
            >
                <span class="sidebar-icon">▤</span>
                Inventory
            </a>

            <a
                href="#analytics"
                class="sidebar-link"
            >
                <span class="sidebar-icon">◔</span>
                Analytics
            </a>

            <a
                href="#reports"
                class="sidebar-link"
            >
                <span class="sidebar-icon">▥</span>
                Reports
            </a>

        </div>

        <div class="sidebar-bottom">

            <div class="sidebar-label">
                ACCOUNT
            </div>

            <div class="admin-card">

                <div class="admin-name">
                    Administrator
                </div>

                <div class="admin-role">
                    System Administrator
                </div>

            </div>

            <form
                method="POST"
                action="{{ route('logout') }}"
            >

                @csrf

                <button
                    type="submit"
                    class="logout-button"
                >
                    ↪ Logout
                </button>

            </form>

        </div>

    </aside>


    <main class="inventory-main">

        <div class="main-container">

            <div class="topbar">

                <div>

                    <h1 class="page-title">
                        Dashboard
                    </h1>

                    <p class="page-description">
                        Welcome back, Admin! Here's your hardware inventory overview.
                    </p>

                </div>

                <a
                    href="{{ route('products.create') }}"
                    class="add-button"
                >
                    + Add Product
                </a>

            </div>

            <div class="stats-grid">

                <div class="stat-card">

                    <div class="stat-head">

                        <div class="stat-label">
                            TOTAL PRODUCTS
                        </div>

                        <div class="stat-icon purple-bg">
                            📦
                        </div>

                    </div>

                    <div class="stat-number">
                        {{ $totalProducts }}
                    </div>

                    <div class="stat-footer">
                        Products in inventory
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-head">

                        <div class="stat-label">
                            LOW STOCK
                        </div>

                        <div class="stat-icon orange-bg">
                            ⚠
                        </div>

                    </div>

                    <div class="stat-number">
                        {{ $lowStock }}
                    </div>

                    <div class="stat-footer">
                        Items need replenishment
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-head">

                        <div class="stat-label">
                            OUT OF STOCK
                        </div>

                        <div class="stat-icon pink-bg">
                            !
                        </div>

                    </div>

                    <div class="stat-number">
                        {{ $outOfStock }}
                    </div>

                    <div class="stat-footer">
                        Items unavailable
                    </div>

                </div>


                <div class="stat-card">

                    <div class="stat-head">

                        <div class="stat-label">
                            INVENTORY VALUE
                        </div>

                        <div class="stat-icon green-bg">
                            ₱
                        </div>

                    </div>

                    <div class="stat-number">
                        ₱{{ number_format($inventoryValue, 2) }}
                    </div>

                    <div class="stat-footer">
                        Total current stock value
                    </div>

                </div>

            </div>


            <div class="dashboard-card card-padding inventory-tools">

                <div class="tools-top">

                    <div>

                        <h2 class="card-title">
                            Inventory Management
                        </h2>

                        <p class="card-subtitle">
                            Search, filter and monitor your hardware products
                        </p>

                    </div>

                    <a
                        href="{{ route('products.index') }}"
                        class="view-products"
                    >
                        View All →
                    </a>

                </div>


                <div class="filters">

                    <input
                        type="text"
                        id="productSearch"
                        class="filter-control"
                        placeholder="🔍 Search product or SKU..."
                    >

                    <select
                        id="categoryFilter"
                        class="filter-control"
                    >

                        <option value="">
                            All Categories
                        </option>

                        @foreach($categoryData as $category)

                            <option value="{{ strtolower($category->category) }}">
                                {{ $category->category }}
                            </option>

                        @endforeach

                    </select>


                    <select
                        id="stockFilter"
                        class="filter-control"
                    >

                        <option value="">
                            All Stock Status
                        </option>

                        <option value="in stock">
                            In Stock
                        </option>

                        <option value="low stock">
                            Low Stock
                        </option>

                        <option value="out of stock">
                            Out of Stock
                        </option>

                    </select>

                </div>

            </div>


            <div class="middle-grid">


                <div class="dashboard-card card-padding">

                    <h2 class="card-title">
                        Low Stock Alert
                    </h2>

                    <p class="card-subtitle">
                        Products that need attention
                    </p>

                    <div class="low-stock-list">

                        @forelse($lowStockProducts as $product)

                            <div class="low-stock-item">

                                <div class="stock-product">

                                    <div class="product-avatar">
                                        {{ strtoupper(substr($product->name, 0, 1)) }}
                                    </div>

                                    <div>

                                        <div class="product-name-small">
                                            {{ $product->name }}
                                        </div>

                                        <div class="product-sku-small">
                                            SKU: {{ $product->sku }}
                                        </div>

                                    </div>

                                </div>

                                <span class="qty-warning">
                                    {{ $product->quantity }}
                                    / {{ $product->reorder_level }}
                                </span>

                            </div>

                        @empty

                            <div class="empty-stock">
                                ✓ No low-stock products at the moment.
                            </div>

                        @endforelse

                    </div>

                </div>


                <div class="dashboard-card card-padding">

                    <h2 class="card-title">
                        Stock Status
                    </h2>

                    <p class="card-subtitle">
                        Current inventory distribution
                    </p>

                    <div class="chart-area">

                        <canvas id="stockChart"></canvas>

                    </div>

                </div>

            </div>


            <div class="dashboard-card card-padding table-card">

                <div class="table-header">

                    <div>

                        <h2 class="card-title">
                            Recent Products
                        </h2>

                        <p class="card-subtitle">
                            Latest hardware products added to inventory
                        </p>

                    </div>

                    <a
                        href="{{ route('products.index') }}"
                        class="view-products"
                    >
                        Manage Products →
                    </a>

                </div>


                <div class="table-wrapper">

                    <table
                        class="product-table"
                        id="productTable"
                    >

                        <thead>

                            <tr>

                                <th>Product</th>
                                <th>SKU</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Status</th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($products as $product)

                                @if($product->quantity == 0)

                                    @php
                                        $status = 'Out of Stock';
                                        $statusClass = 'status-out';
                                    @endphp

                                @elseif($product->quantity <= $product->reorder_level)

                                    @php
                                        $status = 'Low Stock';
                                        $statusClass = 'status-low';
                                    @endphp

                                @else

                                    @php
                                        $status = 'In Stock';
                                        $statusClass = 'status-in';
                                    @endphp

                                @endif


                                <tr
                                    data-name="{{ strtolower($product->name) }}"
                                    data-sku="{{ strtolower($product->sku) }}"
                                    data-category="{{ strtolower($product->category) }}"
                                    data-status="{{ strtolower($status) }}"
                                >

                                    <td class="strong-text">
                                        {{ $product->name }}
                                    </td>

                                    <td class="muted-text">
                                        {{ $product->sku }}
                                    </td>

                                    <td>
                                        {{ $product->category }}
                                    </td>

                                    <td class="strong-text">
                                        {{ $product->quantity }}
                                    </td>

                                    <td>
                                        ₱{{ number_format($product->unit_price, 2) }}
                                    </td>

                                    <td>

                                        <span class="status-badge {{ $statusClass }}">
                                            {{ $status }}
                                        </span>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td
                                        colspan="6"
                                        class="empty-row"
                                    >
                                        No products found.
                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>


            <div
                class="analytics-grid"
                id="analytics"
            >


                <div class="dashboard-card card-padding">

                    <h2 class="card-title">
                        Inventory by Category
                    </h2>

                    <p class="card-subtitle">
                        Total quantity across each category
                    </p>

                    <div class="chart-area">

                        <canvas id="categoryChart"></canvas>

                    </div>

                </div>


                <div class="dashboard-card card-padding">

                    <h2 class="card-title">
                        Inventory Value
                    </h2>

                    <p class="card-subtitle">
                        Current inventory value by category
                    </p>

                    <div class="chart-area">

                        <canvas id="valueChart"></canvas>

                    </div>

                </div>

            </div>


            <div class="quick-card">

                <h2 class="card-title">
                    Quick Actions
                </h2>

                <p class="card-subtitle">
                    Frequently used inventory functions
                </p>


                <div class="quick-actions">

                    <a
                        href="{{ route('products.index') }}"
                        class="quick-link"
                    >

                        <span class="quick-link-icon">
                            📦
                        </span>

                        View Products

                    </a>


                    <a
                        href="{{ route('products.create') }}"
                        class="quick-link"
                    >

                        <span class="quick-link-icon">
                            ＋
                        </span>

                        Add Product

                    </a>


                    <a
                        href="{{ route('inventory.index') }}"
                        class="quick-link"
                    >

                        <span class="quick-link-icon">
                            📋
                        </span>

                        Manage Inventory

                    </a>


                    <a
                        href="#reports"
                        class="quick-link"
                    >

                        <span class="quick-link-icon">
                            📊
                        </span>

                        View Reports

                    </a>

                </div>

            </div>


            <div
                class="dashboard-card card-padding"
                id="reports"
            >

                <h2 class="card-title">
                    Inventory Reports
                </h2>

                <p class="card-subtitle">
                    Quick summary of your hardware inventory
                </p>


                <div class="report-grid">


                    <div class="report-box">

                        <div class="report-label">
                            Total Products
                        </div>

                        <div class="report-value">
                            {{ $totalProducts }}
                        </div>

                    </div>


                    <div class="report-box">

                        <div class="report-label">
                            Low Stock Items
                        </div>

                        <div class="report-value">
                            {{ $lowStock }}
                        </div>

                    </div>


                    <div class="report-box">

                        <div class="report-label">
                            Out of Stock
                        </div>

                        <div class="report-value">
                            {{ $outOfStock }}
                        </div>

                    </div>


                </div>

            </div>

        </div>

    </main>

</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {


        const stockInCount =
            Number(@json($inStockCount));

        const lowStockCount =
            Number(@json($lowStock));

        const outOfStockCount =
            Number(@json($outOfStock));


        const categoryLabels =
            @json($categoryData->pluck('category')->values());

        const categoryQuantities =
            @json($categoryData->pluck('total_quantity')->values())
                .map(Number);

        const categoryValues =
            @json($categoryData->pluck('total_value')->values())
                .map(Number);


        const stockCanvas =
            document.getElementById('stockChart');

        if (stockCanvas) {

            new Chart(stockCanvas, {

                type: 'doughnut',

                data: {

                    labels: [
                        'In Stock',
                        'Low Stock',
                        'Out of Stock'
                    ],

                    datasets: [{

                        data: [
                            stockInCount,
                            lowStockCount,
                            outOfStockCount
                        ],

                        backgroundColor: [
                            '#8E5A83',
                            '#E5989B',
                            '#C06C84'
                        ],

                        borderWidth: 0

                    }]
                },

                options: {

                    responsive: true,

                    maintainAspectRatio: false,

                    cutout: '68%',

                    plugins: {

                        legend: {

                            position: 'bottom',

                            labels: {

                                boxWidth: 10,

                                font: {
                                    size: 10
                                }

                            }

                        }

                    }

                }

            });

        }


        const categoryCanvas =
            document.getElementById('categoryChart');

        if (categoryCanvas) {

            new Chart(categoryCanvas, {

                type: 'bar',

                data: {

                    labels: categoryLabels,

                    datasets: [{

                        label: 'Quantity',

                        data: categoryQuantities,

                        backgroundColor: '#8E5A83',

                        borderRadius: 8

                    }]

                },

                options: {

                    responsive: true,

                    maintainAspectRatio: false,

                    plugins: {

                        legend: {
                            display: false
                        }

                    },

                    scales: {

                        y: {

                            beginAtZero: true,

                            ticks: {
                                precision: 0
                            }

                        }

                    }

                }

            });

        }


        const valueCanvas =
            document.getElementById('valueChart');

        if (valueCanvas) {

            new Chart(valueCanvas, {

                type: 'bar',

                data: {

                    labels: categoryLabels,

                    datasets: [{

                        label: 'Inventory Value',

                        data: categoryValues,

                        backgroundColor: '#E5989B',

                        borderRadius: 8

                    }]

                },

                options: {

                    responsive: true,

                    maintainAspectRatio: false,

                    plugins: {

                        legend: {
                            display: false
                        },

                        tooltip: {

                            callbacks: {

                                label: function (context) {

                                    return (
                                        '₱' +
                                        Number(
                                            context.raw
                                        ).toLocaleString(
                                            'en-PH',
                                            {
                                                minimumFractionDigits: 2
                                            }
                                        )
                                    );

                                }

                            }

                        }

                    },

                    scales: {

                        y: {

                            beginAtZero: true,

                            ticks: {

                                callback: function (value) {

                                    return (
                                        '₱' +
                                        Number(value).toLocaleString(
                                            'en-PH'
                                        )
                                    );

                                }

                            }

                        }

                    }

                }

            });

        }


        const searchInput =
            document.getElementById('productSearch');

        const categoryFilter =
            document.getElementById('categoryFilter');

        const stockFilter =
            document.getElementById('stockFilter');

        const productTableBody =
            document.querySelector(
                '#productTable tbody'
            );


        let searchTimer = null;


        function escapeHtml(value) {

            return String(value)
                .replace(/&/g, '&amp;')
                .replace(/</g, '&lt;')
                .replace(/>/g, '&gt;')
                .replace(/"/g, '&quot;')
                .replace(/'/g, '&#039;');

        }


        function getStatus(product) {

            const quantity =
                Number(product.quantity);

            const reorderLevel =
                Number(product.reorder_level);


            if (quantity === 0) {
                return 'Out of Stock';
            }


            if (quantity <= reorderLevel) {
                return 'Low Stock';
            }


            return 'In Stock';

        }


        function renderProducts(products) {

            if (!productTableBody) {
                return;
            }


            productTableBody.innerHTML = '';


            if (products.length === 0) {

                productTableBody.innerHTML = `
                    <tr>
                        <td
                            colspan="6"
                            class="empty-row"
                        >
                            No matching products found.
                        </td>
                    </tr>
                `;

                return;

            }


            products.forEach(function (product) {

                const status =
                    getStatus(product);


                let statusClass =
                    'status-in';


                if (status === 'Low Stock') {
                    statusClass = 'status-low';
                }


                if (status === 'Out of Stock') {
                    statusClass = 'status-out';
                }


                const row =
                    document.createElement('tr');


                row.innerHTML = `

                    <td class="strong-text">
                        ${escapeHtml(product.name)}
                    </td>

                    <td class="muted-text">
                        ${escapeHtml(product.sku)}
                    </td>

                    <td>
                        ${escapeHtml(product.category)}
                    </td>

                    <td class="strong-text">
                        ${product.quantity}
                    </td>

                    <td>
                        ₱${Number(
                            product.unit_price
                        ).toLocaleString(
                            'en-PH',
                            {
                                minimumFractionDigits: 2,
                                maximumFractionDigits: 2
                            }
                        )}
                    </td>

                    <td>
                        <span
                            class="status-badge ${statusClass}"
                        >
                            ${status}
                        </span>
                    </td>

                `;


                productTableBody.appendChild(row);

            });

        }


        function performSearch() {

            const search =
                searchInput
                    ? searchInput.value.trim()
                    : '';


            const category =
                categoryFilter
                    ? categoryFilter.value
                    : '';


            let status = '';


            if (stockFilter) {

                if (
                    stockFilter.value ===
                    'in stock'
                ) {

                    status = 'in_stock';

                }

                else if (
                    stockFilter.value ===
                    'low stock'
                ) {

                    status = 'low_stock';

                }

                else if (
                    stockFilter.value ===
                    'out of stock'
                ) {

                    status = 'out_of_stock';

                }

            }


            const params =
                new URLSearchParams();


            if (search !== '') {

                params.append(
                    'search',
                    search
                );

            }


            if (category !== '') {

                params.append(
                    'category',
                    category
                );

            }


            if (status !== '') {

                params.append(
                    'status',
                    status
                );

            }


            fetch(
                `{{ route('dashboard.search') }}?${params.toString()}`,
                {
                    method: 'GET',

                    headers: {
                        'Accept': 'application/json'
                    }
                }
            )

            .then(function (response) {

                if (!response.ok) {

                    throw new Error(
                        'Search request failed.'
                    );

                }

                return response.json();

            })

            .then(function (products) {

                renderProducts(products);

            })

            .catch(function (error) {

                console.error(error);


                if (productTableBody) {

                    productTableBody.innerHTML = `
                        <tr>
                            <td
                                colspan="6"
                                class="empty-row"
                            >
                                Unable to load search results.
                            </td>
                        </tr>
                    `;

                }

            });

        }


        if (searchInput) {

            searchInput.addEventListener(
                'input',
                function () {

                    clearTimeout(
                        searchTimer
                    );


                    searchTimer =
                        setTimeout(
                            performSearch,
                            250
                        );

                }
            );

        }


        if (categoryFilter) {

            categoryFilter.addEventListener(
                'change',
                performSearch
            );

        }


        if (stockFilter) {

            stockFilter.addEventListener(
                'change',
                performSearch
            );

        }

        if (searchInput) {

            searchInput.addEventListener(
                'keydown',
                function (event) {

                    if (event.key === 'Enter') {

                        event.preventDefault();

                        performSearch();

                    }

                }
            );

        }

    });
</script>

</x-app-layout>
