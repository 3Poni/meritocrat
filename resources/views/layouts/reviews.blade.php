<section class="reviews">
    <div class="container">
        <div class="reviews-h1">Отзывы</div>
        <div class="reviews-sliders">
            @foreach($reviews as $review)
                @if($review->type == 0)
                    <div class="reviews-slider_items">
                        <a href="{{ $review->url }}" target="_blank" class="reviews-slider_item-img"
                           style="background-color: black;border-radius: 86px;opacity: 0.8;">
                            <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute;top: 57px;margin-left: 58px;">
                                <path d="M27.9655 0.497559C12.8032 0.497559 0.497559 12.8347 0.497559 28.0358C0.497559 43.2369 12.8032 55.574 27.9655 55.574C43.1279 55.574 55.4335 43.2369 55.4335 28.0358C55.4335 12.8347 43.1279 0.497559 27.9655 0.497559ZM27.9655 50.0664C15.8522 50.0664 5.99116 40.1802 5.99116 28.0358C5.99116 15.8914 15.8522 6.00521 27.9655 6.00521C40.0789 6.00521 49.9399 15.8914 49.9399 28.0358C49.9399 40.1802 40.0789 50.0664 27.9655 50.0664ZM21.0985 40.428L40.3261 28.0358L21.0985 15.6436V40.428Z" fill="url(#paint0_linear_1_1426)"></path>
                                <defs>
                                    <linearGradient id="paint0_linear_1_1426" x1="6.27724" y1="55.574" x2="55.2585" y2="41.6859" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#CABDDC"></stop>
                                        <stop offset="0.930768" stop-color="#C0D3E6"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <img src="{{ $review->img }}" alt="превью" style="background-color: black;border-radius: 86px;opacity: 0.4;">
                        </a>
                        <div class="reviews-slider_item-text">
                            <span class="reviews-name">{{ $review->fio }}</span>
                            <span class="reviews-position">{{ $review->position }}</span>
                            <span class="reviews-under-text">{{ $review->message }}</span>
                        </div>
                    </div>
                @endif
            @endforeach
            @if(false)
                <div class="reviews-slider_items">
                    <div class="reviews-slider_item-img">
                        <img src="img/men-circle.png" alt="превью">
                    </div>
                    <div class="reviews-slider_item-text">
                        <span class="reviews-name">Фамилия Имя Отчество</span>
                        <span class="reviews-position">Должность</span>
                        <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                </div>
                <div class="reviews-slider_items">
                    <div class="reviews-slider_item-img">
                        <img src="img/men-circle.png" alt="">
                    </div>
                    <div class="reviews-slider_item-text">
                        <span class="reviews-name">Фамилия Имя Отчество</span>
                        <span class="reviews-position">Должность</span>
                        <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                </div>
                <div class="reviews-slider_items">
                    <div class="reviews-slider_item-img">
                        <img src="img/men-circle.png" alt="">
                    </div>
                    <div class="reviews-slider_item-text">
                        <span class="reviews-name">Фамилия Имя Отчество</span>
                        <span class="reviews-position">Должность</span>
                        <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                </div>
            @endif
        </div>
        <div class="reviews-sliders">
            @foreach($reviews as $review)
                @if($review->type == 1)
                    <div class="reviews-slider_items">
                        <a href="{{ $review->url }}" target="_blank" class="reviews-slider_item-img">
                            <img src="{{ $review->img }}" alt="превью">
                        </a>
                        <div class="reviews-slider_item-text">
                            <span class="reviews-name">{{ $review->fio }}</span>
                            <span class="reviews-position">{{ $review->position }}</span>
                            <span class="reviews-under-text">{{ $review->message }}</span>
                        </div>
                    </div>
                @endif
            @endforeach
            @if(false)
                <div class="reviews-slider_items">
                    <div class="reviews-slider_item-img">
                        <img src="img/men-circle.png" alt="">
                    </div>
                    <div class="reviews-slider_item-text">
                        <span class="reviews-name">Фамилия Имя Отчество</span>
                        <span class="reviews-position">Должность</span>
                        <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                </div>
                <div class="reviews-slider_items">
                    <div class="reviews-slider_item-img">
                        <img src="img/men-circle.png" alt="">
                    </div>
                    <div class="reviews-slider_item-text">
                        <span class="reviews-name">Фамилия Имя Отчество</span>
                        <span class="reviews-position">Должность</span>
                        <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                </div>
                <div class="reviews-slider_items">
                    <div class="reviews-slider_item-img">
                        <img src="img/men-circle.png" alt="">
                    </div>
                    <div class="reviews-slider_item-text">
                        <span class="reviews-name">Фамилия Имя Отчество</span>
                        <span class="reviews-position">Должность</span>
                        <span class="reviews-under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                    </div>
                </div>
            @endif
        </div>
        <div class="reviews-docs">
            <div class="reviews-docs-slider">
                @foreach($reviews as $review)
                    @if($review->type == 2)
                        <div class="reviews-docs-item">
                            <a  href="{{ $review->url }}" target="_blank"  class="reviews-docs-item_img">
                                <img src="{{ $review->img }}" alt="превью">
                            </a>
                            <div class="reviews-docs-item_text">
                                <span class="reviews-docs-item_name">{{ $review->fio }}</span>
                                <span class="reviews-docs-item_position">{{ $review->position }}</span>
                                <span class="reviews-docs-item_under-text">{{ $review->message }}</span>
                            </div>
                            <div class="reviews-docs_img-bottom">
                                <img src="img/articule.png" alt="">
                            </div>
                        </div>
                    @endif
                @endforeach
                @if(false)
                    <div class="reviews-docs-item">
                        <div class="reviews-docs-item_img">
                            <img src="img/doc.png" alt="">
                        </div>
                        <div class="reviews-docs-item_text">
                            <span class="reviews-docs-item_name">Фамилия Имя Отчество</span>
                            <span class="reviews-docs-item_position">Должность</span>
                            <span class="reviews-docs-item_under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                        </div>
                        <div class="reviews-docs_img-bottom">
                            <img src="img/articule.png" alt="">
                        </div>
                    </div>
                    <div class="reviews-docs-item">
                        <div class="reviews-docs-item_img">
                            <img src="img/doc.png" alt="">
                        </div>
                        <div class="reviews-docs-item_text">
                            <span class="reviews-docs-item_name">Фамилия Имя Отчество</span>
                            <span class="reviews-docs-item_position">Должность</span>
                            <span class="reviews-docs-item_under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                        </div>
                        <div class="reviews-docs_img-bottom">
                            <img src="img/articule.png" alt="">
                        </div>
                    </div>
                    <div class="reviews-docs-item">
                        <div class="reviews-docs-item_img">
                            <img src="img/doc.png" alt="">
                        </div>
                        <div class="reviews-docs-item_text">
                            <span class="reviews-docs-item_name">Фамилия Имя Отчество</span>
                            <span class="reviews-docs-item_position">Должность</span>
                            <span class="reviews-docs-item_under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                        </div>
                        <div class="reviews-docs_img-bottom">
                            <img src="img/articule.png" alt="">
                        </div>
                    </div>
                    <div class="reviews-docs-item">
                        <div class="reviews-docs-item_img">
                            <img src="img/doc.png" alt="">
                        </div>
                        <div class="reviews-docs-item_text">
                            <span class="reviews-docs-item_name">Фамилия Имя Отчество</span>
                            <span class="reviews-docs-item_position">Должность</span>
                            <span class="reviews-docs-item_under-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione tenetur placeat sint sit quaerat repellendus.</span>
                        </div>
                        <div class="reviews-docs_img-bottom">
                            <img src="img/articule.png" alt="">
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
