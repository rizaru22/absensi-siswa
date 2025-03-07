<div>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Dashboad</h3>
                    <p class="text-subtitle text-muted">Selamat datang di dashboard admin</p>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Default Layout</h4>
                </div>
                <div class="card-body">
                  <h3>Selamat datang {{ auth()->user()->username }}</h3>
                  <p>Anda login sebagai {{ auth()->user()->role }}</p>
                </div>
            </div>
        </section>
    </div>
</div>
