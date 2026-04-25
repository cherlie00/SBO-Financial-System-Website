<header class="topbar">
  <h1 class="topbar-title">
    <?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Dashboard'; ?>
  </h1>
  <div class="topbar-right">
    <!-- Search -->
    <div class="search-bar">
      <svg class="search-icon" width="15" height="15" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8"/>
        <line x1="21" y1="21" x2="16.65" y2="16.65"/>
      </svg>
      <input type="text" placeholder="Search..." />
    </div>
    <div class="topbar-actions">
      <button class="btn-add">+ Add Record</button>
    </div>
    <span class="user-name"><?php echo htmlspecialchars($name); ?></span>
  </div>
</header>
