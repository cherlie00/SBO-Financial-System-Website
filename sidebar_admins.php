<aside class="sidebar">
  <div class="sidebar-brand">
    <div class="brand-logo">
      <img src="../images/image.png" alt="SBO Logo"/>
    </div>
    
    <div class="brand-text">
      <span class="brand-title" style="font-size: 16px;"><strong>SBO Financial System</strong></span>
      <span class="brand-subtitle" style="font-size: 0.7rem;">Budget Allocation &amp; Transparency</span>
    </div>
  </div>

  <!-- NAVIGATION SECTION - Main menu links for different system pages -->
  <nav class="sidebar-nav">
    <a href="dashboard_admins.php" class="nav-item active">
      <span class="nav-icon">

        <!-- Bar chart icon - represents dashboard analytics -->
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
          <rect x="3" y="12" width="4" height="9" rx="1"/>
          <rect x="10" y="7" width="4" height="14" rx="1"/>
          <rect x="17" y="3" width="4" height="18" rx="1"/>
        </svg>
      </span>
      Dashboard
    </a>

    <!-- Collections link - Manage fund collections -->
    <a href="collection_admins.php" class="nav-item">
      <span class="nav-icon">
        <!-- Grid icon - represents multiple collections -->
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="3" width="7" height="7" rx="1"/>
          <rect x="14" y="3" width="7" height="7" rx="1"/>
          <rect x="3" y="14" width="7" height="7" rx="1"/>
          <rect x="14" y="14" width="7" height="7" rx="1"/>
        </svg>
      </span>
      Collections
    </a>

    <!-- Allocations link - View budget distributions -->
    <a href="allocations_admins.php" class="nav-item">
      <span class="nav-icon">
        <!-- Pyramid icon - represents allocation hierarchy -->
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polygon points="12 2 2 7 12 12 22 7 12 2"/>
          <polyline points="2 17 12 22 22 17"/>
          <polyline points="2 12 12 17 22 12"/>
        </svg>
      </span>
      Allocations
    </a>

    <!-- Budget Overview link - Display budget summary and statistics -->
    <a href="budget_overview_admins.php" class="nav-item">
      <span class="nav-icon">
        <!-- Pie chart icon - represents budget distribution -->
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21.21 15.89A10 10 0 1 1 8 2.83"/>
          <path d="M22 12A10 10 0 0 0 12 2v10z"/>
        </svg>
      </span>
      Budget Overview
    </a>

    <!-- Reports link - Generate and view system reports -->
    <a href="reports_admins.php" class="nav-item">
      <span class="nav-icon">
        <!-- Document icon - represents reports -->
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
          <polyline points="14 2 14 8 20 8"/>
          <line x1="8" y1="13" x2="16" y2="13"/>
          <line x1="8" y1="17" x2="16" y2="17"/>
        </svg>
      </span>
      Reports
    </a>
  </nav>


  <div class="sidebar-footer">
    <button class="logout-btn">
      <span class="nav-icon">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
          <polyline points="16 17 21 12 16 7"/>
          <line x1="21" y1="12" x2="9" y2="12"/>
        </svg>
      </span>
      Logout
    </button>
  </div>
</aside>