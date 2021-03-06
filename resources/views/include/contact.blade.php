<div class="contact__gunadarma">
    <div class="container">
        <div class="row row-cols-lg-3 row-cols-1 align-items-start">
            <div class="col">
                <div class="location">
                    <h5>Locations</h5>
                    <div class="location__content">
                        {!!$location->value!!}
                        <a href="#">Kampus Lainnya</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="link">
                    <h5>Link</h5>
                    <div class="link__content">
                        <ul>
                            <li>
                                <a href="http://staffsite.gunadarma.ac.id/" target="_blank">Staffsite</a>
                            </li>
                            <li>
                                <a href="https://studentsite.gunadarma.ac.id/" target="_blank">Studensite</a>
                            </li>
                            <li>
                                <a href="http://career.gunadarma.ac.id/" target="_blank">CareerCenter</a>
                            </li>
                            <li>
                                <a href="#">
                                    Library
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="email__gundar">
                        <div class="email__boxImg">
                            <img src="./assets/images/icons/email.png" alt="">
                        </div>
                        <div class="email__content">
                            <h5>Email</h5>
                            {!!$email->value!!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="telephone__gundar">
                            <div class="telephone__boxImg">
                                <img src="./assets/images/icons/phone-call.png" alt="Telephone">
                            </div>
                            <div class="telephone__content">
                                <h5>Telephone</h5>
                                {!!$telephone->value!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>