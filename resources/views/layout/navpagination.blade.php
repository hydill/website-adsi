<nav aria-label="...">
    <ul class="pagination justify-content-end">
        <li class="page-item disabled">
            <a class="page-link">Previous</a>
        </li>
        <li class="page-item  {{ ($title === "cctv1")?"active" : "" }}"><a class="page-link" href="/cctv/masuk1">1</a></li>
        <li class="page-item  {{ ($title === "cctv2")?"active" : "" }}"><a class="page-link" href="/cctv/masuk2">2</a></li>
        <li class="page-item  {{ ($title === "cctv3")?"active" : "" }}"><a class="page-link" href="/cctv/masuk3">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>