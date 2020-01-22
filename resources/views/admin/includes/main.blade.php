@include('admin.includes.head')
@include('admin.includes.nav')

@yield('content')

<!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2019 <a href="https://www.mmusda.com" class="font-weight-bold ml-1" target="_blank">Mmusda</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.mmusda.com" class="nav-link" target="_blank">Mmusda</a>
              </li>
              <li class="nav-item">
                <a href="https://www.mmusda.com" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.mmusda.com" class="nav-link" target="_blank">Blog</a>
              </li>
              
            </ul>
          </div>
        </div>
      </footer>
</div>
  </div>
  <!--   Core   -->
  <script src="/assets2/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="/assets2/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->

   <script src="/dist/js/datepicker.min.js"></script>
   <script src="/dist/js/i18n/datepicker.en.js"></script>

  <script src="/assets2/js/plugins/chart.js/dist/Chart.min.js"></script>
  <script src="/assets2/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="/assets2/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>

  <script type="text/javascript">
     $('#d-date').datepicker({
          language: 'en',
          minDate: new Date() // Now can select only dates, which goes after today
      })
  </script>
</body>

</html>

@include('admin.includes.footer')
