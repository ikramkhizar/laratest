<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ env('APP_NAME') ?? 'Laravel' }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route("admin.home") }}" class="nav-link">
                        <i class="fas fa-chart-line mr-2"></i>
                        <p><span>Dashboard</span></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                        <i class="fas fa-user-circle mr-2"></i>
                        <p><span>Products</span></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        <p><span>Logout</span></p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>