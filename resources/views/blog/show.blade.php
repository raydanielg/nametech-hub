@extends('layouts.app')

@section('content')
@include('landing.partials.header')

<!-- Blog Detail Hero -->
<div class="blog-hero position-relative overflow-hidden" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 500px;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23ffffff\" fill-opacity=\"0.05\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <!-- Animated Shapes -->
    <div class="floating-shape shape-1 position-absolute rounded-circle" style="width: 300px; height: 300px; background: rgba(255,255,255,0.1); top: -100px; right: -100px; animation: float 8s ease-in-out infinite;"></div>
    <div class="floating-shape shape-2 position-absolute rounded-circle" style="width: 200px; height: 200px; background: rgba(255,255,255,0.05); bottom: -50px; left: -50px; animation: float 10s ease-in-out infinite reverse;"></div>
    <div class="floating-shape shape-3 position-absolute" style="width: 100px; height: 100px; background: rgba(255,255,255,0.08); border-radius: 20px; top: 50%; left: 10%; transform: rotate(45deg); animation: float 6s ease-in-out infinite;"></div>
    
    <div class="container position-relative" style="z-index: 10;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="mb-4 pt-4">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none opacity-75 hover-opacity-100">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog.latest') }}" class="text-white text-decoration-none opacity-75 hover-opacity-100">Blog</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog.latest') }}" class="text-white text-decoration-none opacity-75 hover-opacity-100">{{ $blog->category }}</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ Str::limit($blog->title, 30) }}</li>
                    </ol>
                </nav>
                
                <!-- Blog Title -->
                <h1 class="display-4 fw-bold text-white mb-4 text-center animate-fade-up" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">
                    {{ $blog->title }}
                </h1>
                
                <!-- Tags -->
                @if($blog->tags)
                <div class="d-flex flex-wrap justify-content-center gap-2 mb-4 animate-fade-up" style="animation-delay: 0.1s;">
                    @foreach($blog->tags as $tag)
                    <span class="badge bg-white bg-opacity-20 text-white px-3 py-2 rounded-pill">#{{ $tag }}</span>
                    @endforeach
                </div>
                @endif
                
                <!-- Author Info Bar -->
                <div class="d-flex flex-wrap align-items-center justify-content-center gap-4 text-white animate-fade-up" style="animation-delay: 0.2s;">
                    <div class="d-flex align-items-center">
                        <div class="author-avatar-wrapper me-3">
                            @if($blog->author_avatar)
                                <img src="{{ asset($blog->author_avatar) }}" alt="{{ $blog->author_name }}" class="rounded-circle border-3 border-white shadow-sm" style="width: 60px; height: 60px; object-fit: cover;">
                            @else
                                <div class="rounded-circle bg-white text-primary d-flex align-items-center justify-content-center border-3 border-white shadow-sm" style="width: 60px; height: 60px; font-size: 24px; font-weight: bold;">
                                    {{ strtoupper(substr($blog->author_name, 0, 1)) }}
                                </div>
                            @endif
                        </div>
                        <div>
                            <div class="fw-bold fs-5">{{ $blog->author_name }}</div>
                            <div class="opacity-75 small">{{ $blog->formatted_date }} · {{ $blog->read_time }} min read</div>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center gap-3 ms-lg-4">
                        <div class="d-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-white bg-opacity-10">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                            <span class="fw-bold">{{ number_format($blog->views_count) }} views</span>
                        </div>
                        <button class="btn btn-light btn-sm rounded-pill px-3 d-flex align-items-center gap-2 hover-scale" onclick="document.getElementById('share-section').scrollIntoView({behavior: 'smooth'})">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
                            Share
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Wave Bottom -->
    <div class="position-absolute bottom-0 start-0 w-100" style="height: 80px;">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-100" preserveAspectRatio="none">
            <path d="M0 80V40C240 80 480 0 720 0C960 0 1200 80 1440 40V80H0Z" fill="#f8fafc"/>
        </svg>
    </div>
</div>

<!-- Main Content -->
<div class="py-5 bg-light">
    <div class="container">
        <div class="row g-5">
            <!-- Sidebar Left - Social Share Sticky -->
            <div class="col-lg-1 d-none d-lg-block">
                <div class="sticky-top" style="top: 120px;">
                    <div class="d-flex flex-column gap-3 align-items-center">
                        <div class="text-muted small fw-bold mb-2">Share</div>
                        
                        <a href="{{ $blog->twitter_share_url }}" target="_blank" class="social-btn social-twitter" title="Share on Twitter">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        
                        <a href="{{ $blog->facebook_share_url }}" target="_blank" class="social-btn social-facebook" title="Share on Facebook">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        
                        <a href="{{ $blog->linkedIn_share_url }}" target="_blank" class="social-btn social-linkedin" title="Share on LinkedIn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        
                        <a href="{{ $blog->whatsapp_share_url }}" target="_blank" class="social-btn social-whatsapp" title="Share on WhatsApp">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </a>
                        
                        <a href="{{ $blog->telegram_share_url }}" target="_blank" class="social-btn social-telegram" title="Share on Telegram">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
                        </a>
                        
                        <button class="social-btn social-copy" onclick="copyToClipboard('{{ $blog->share_url }}')" title="Copy Link">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Main Article -->
            <div class="col-lg-7">
                <!-- Featured Image -->
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-4 animate-fade-up">
                    <div class="position-relative" style="height: 400px;">
                        @if($blog->featured_image)
                            <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}" class="w-100 h-100 object-fit-cover hover-zoom-img">
                        @else
                            <div class="w-100 h-100 bg-gradient-primary d-flex align-items-center justify-content-center">
                                <svg width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1" class="opacity-50"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                            </div>
                        @endif
                        <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                            <span class="badge bg-success px-3 py-2 rounded-pill">{{ $blog->category }}</span>
                        </div>
                    </div>
                </div>
                
                <!-- Article Content -->
                <div class="card border-0 shadow-sm rounded-4 p-4 p-lg-5 mb-4 animate-fade-up" style="animation-delay: 0.1s;">
                    <div class="blog-content fs-5 lh-base text-dark">
                        {!! $blog->content !!}
                    </div>
                    
                    <!-- Tags -->
                    @if($blog->tags)
                    <div class="mt-5 pt-4 border-top">
                        <h5 class="fw-bold mb-3">Related Topics</h5>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach($blog->tags as $tag)
                            <a href="#" class="badge bg-light text-dark text-decoration-none px-3 py-2 rounded-pill hover-bg-success hover-text-white transition-all">#{{ $tag }}</a>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
                
                <!-- Author Box -->
                <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 animate-fade-up" style="animation-delay: 0.2s; background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);">
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <div class="author-avatar-large position-relative">
                            @if($blog->author_avatar)
                                <img src="{{ asset($blog->author_avatar) }}" alt="{{ $blog->author_name }}" class="rounded-circle border-4 border-white shadow" style="width: 100px; height: 100px; object-fit: cover;">
                            @else
                                <div class="rounded-circle bg-gradient-primary text-white d-flex align-items-center justify-content-center border-4 border-white shadow" style="width: 100px; height: 100px; font-size: 40px; font-weight: bold;">
                                    {{ strtoupper(substr($blog->author_name, 0, 1)) }}
                                </div>
                            @endif
                            <div class="position-absolute bottom-0 end-0 bg-success rounded-circle border-3 border-white" style="width: 28px; height: 28px; display: flex; align-items: center; justify-content: center;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h4 class="fw-bold mb-2">Written by {{ $blog->author_name }}</h4>
                            <p class="text-muted mb-3">{{ $blog->author_bio ?? 'Tech enthusiast, writer, and innovation advocate. Passionate about sharing knowledge and inspiring the next generation of tech leaders.' }}</p>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-outline-dark btn-sm rounded-pill px-3">View Profile</a>
                                <a href="#" class="btn btn-success btn-sm rounded-pill px-3">Follow</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Share Section (Mobile) -->
                <div id="share-section" class="card border-0 shadow-sm rounded-4 p-4 mb-4 d-lg-none">
                    <h5 class="fw-bold mb-3 text-center">Share This Article</h5>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="{{ $blog->twitter_share_url }}" target="_blank" class="btn btn-dark rounded-circle p-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="{{ $blog->facebook_share_url }}" target="_blank" class="btn btn-primary rounded-circle p-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="{{ $blog->linkedIn_share_url }}" target="_blank" class="btn btn-info rounded-circle p-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="{{ $blog->whatsapp_share_url }}" target="_blank" class="btn btn-success rounded-circle p-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </a>
                    </div>
                </div>
                
                <!-- Newsletter Box -->
                <div class="card border-0 rounded-4 p-4 mb-4 text-white position-relative overflow-hidden animate-fade-up" style="animation-delay: 0.3s; background: linear-gradient(135deg, #10b981 0%, #059669 50%, #047857 100%);">
                    <div class="position-absolute top-0 end-0 opacity-10" style="margin: -30px;">
                        <svg width="200" height="200" viewBox="0 0 24 24" fill="currentColor"><path d="M22 17a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9.5C2 7 4 5 6.5 5H18c2.5 0 4 2 4 4.5V17zM21 9.5c0-1.6-1-2.5-2.5-2.5H6.5C5 7 4 7.9 4 9.5v.5l8 5 8-5v-.5z"/></svg>
                    </div>
                    <div class="position-relative" style="z-index: 1;">
                        <h4 class="fw-bold mb-2">Enjoyed this article?</h4>
                        <p class="opacity-75 mb-4">Subscribe to our newsletter and get the latest insights delivered to your inbox weekly.</p>
                        <form class="d-flex flex-wrap gap-2">
                            <input type="email" class="form-control border-0 rounded-pill px-4 py-2 flex-grow-1" placeholder="Enter your email" style="background: rgba(255,255,255,0.2); color: white;">
                            <button type="submit" class="btn btn-light rounded-pill px-4 fw-bold text-success">Subscribe</button>
                        </form>
                    </div>
                </div>
                
                <!-- Comments Section -->
                <div class="card border-0 shadow-sm rounded-4 p-4 animate-fade-up" style="animation-delay: 0.4s;">
                    <h4 class="fw-bold mb-4">Comments ({{ rand(5, 25) }})</h4>
                    
                    <!-- Comment Form -->
                    <div class="d-flex gap-3 mb-4">
                        <div class="rounded-circle bg-light flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-muted"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                        <div class="flex-grow-1">
                            <textarea class="form-control border-light bg-light rounded-4" rows="3" placeholder="Share your thoughts..."></textarea>
                            <div class="d-flex justify-content-end mt-2">
                                <button class="btn btn-success rounded-pill px-4">Post Comment</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sample Comments -->
                    <div class="comments-list">
                        <div class="d-flex gap-3 mb-4 pb-4 border-bottom">
                            <img src="https://ui-avatars.com/api/?name=John+Doe&background=10b981&color=fff" class="rounded-circle flex-shrink-0" style="width: 50px; height: 50px;">
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <span class="fw-bold">John Doe</span>
                                    <span class="text-muted small">· 2 hours ago</span>
                                </div>
                                <p class="text-muted mb-2">This article is incredibly insightful! The section about scaling was particularly helpful for my startup.</p>
                                <div class="d-flex gap-3 small">
                                    <a href="#" class="text-muted text-decoration-none hover-text-success">Reply</a>
                                    <a href="#" class="text-muted text-decoration-none hover-text-success">Like (12)</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex gap-3">
                            <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=667eea&color=fff" class="rounded-circle flex-shrink-0" style="width: 50px; height: 50px;">
                            <div>
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <span class="fw-bold">Jane Smith</span>
                                    <span class="text-muted small">· 5 hours ago</span>
                                </div>
                                <p class="text-muted mb-2">Thanks for sharing this! Looking forward to more content like this.</p>
                                <div class="d-flex gap-3 small">
                                    <a href="#" class="text-muted text-decoration-none hover-text-success">Reply</a>
                                    <a href="#" class="text-muted text-decoration-none hover-text-success">Like (8)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <!-- Social Media Follow -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 animate-fade-up" style="animation-delay: 0.1s;">
                        <h5 class="fw-bold mb-4">Follow Us</h5>
                        <div class="d-grid gap-3">
                            <a href="#" class="social-follow-btn d-flex align-items-center gap-3 p-3 rounded-3 text-decoration-none" style="background: linear-gradient(135deg, #1da1f2 0%, #0d8bd9 100%); color: white;">
                                <div class="social-icon-wrapper">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="fw-bold">Twitter / X</div>
                                    <div class="small opacity-75">{{ number_format(rand(1000, 50000)) }} followers</div>
                                </div>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>
                            </a>
                            
                            <a href="#" class="social-follow-btn d-flex align-items-center gap-3 p-3 rounded-3 text-decoration-none" style="background: linear-gradient(135deg, #4267B2 0%, #365899 100%); color: white;">
                                <div class="social-icon-wrapper">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="fw-bold">Facebook</div>
                                    <div class="small opacity-75">{{ number_format(rand(5000, 100000)) }} followers</div>
                                </div>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>
                            </a>
                            
                            <a href="#" class="social-follow-btn d-flex align-items-center gap-3 p-3 rounded-3 text-decoration-none" style="background: linear-gradient(135deg, #0077b5 0%, #00669c 100%); color: white;">
                                <div class="social-icon-wrapper">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="fw-bold">LinkedIn</div>
                                    <div class="small opacity-75">{{ number_format(rand(2000, 30000)) }} followers</div>
                                </div>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>
                            </a>
                            
                            <a href="#" class="social-follow-btn d-flex align-items-center gap-3 p-3 rounded-3 text-decoration-none" style="background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); color: white;">
                                <div class="social-icon-wrapper">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="fw-bold">Instagram</div>
                                    <div class="small opacity-75">{{ number_format(rand(3000, 80000)) }} followers</div>
                                </div>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Popular Posts -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 animate-fade-up" style="animation-delay: 0.2s;">
                        <h5 class="fw-bold mb-4">Popular Posts</h5>
                        <div class="popular-posts-list">
                            @php
                            $popularPostsSample = [
                                ['img' => 'technology-innovation-simulation-gadget-concept_53876-121153.jpg', 'title' => '10 Tech Trends to Watch in 2024', 'views' => '12.5K'],
                                ['img' => 'man-wearing-vr-headset-outdoor-futuristic-technology_53876-105391.jpg', 'title' => 'VR Technology Guide for Startups', 'views' => '8.2K'],
                                ['img' => 'close-up-man-repairing-computer-chips.jpg', 'title' => 'Hardware Hacking 101', 'views' => '6.8K'],
                            ];
                            @endphp
                            
                            @foreach($popularPostsSample as $index => $post)
                            <a href="#" class="d-flex gap-3 mb-3 text-decoration-none group {{ $index < 2 ? 'pb-3 border-bottom' : '' }}">
                                <div class="position-relative rounded-3 overflow-hidden flex-shrink-0" style="width: 80px; height: 60px;">
                                    <img src="{{ asset('sampelsimaes/' . $post['img']) }}" class="w-100 h-100 object-fit-cover group-hover-scale">
                                    <div class="position-absolute top-0 start-0 bg-success text-white px-2 py-1 rounded-bottom-right" style="font-size: 0.7rem; font-weight: bold;">
                                        {{ $index + 1 }}
                                    </div>
                                </div>
                                <div>
                                    <h6 class="fw-bold text-dark mb-1 group-hover-text-success transition-colors line-clamp-2" style="font-size: 0.9rem; line-height: 1.4;">{{ $post['title'] }}</h6>
                                    <div class="d-flex align-items-center gap-1 text-muted" style="font-size: 0.75rem;">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                                        {{ $post['views'] }} views
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Related Links -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 animate-fade-up" style="animation-delay: 0.3s;">
                        <h5 class="fw-bold mb-4">Quick Links</h5>
                        <div class="list-group list-group-flush rounded-3">
                            <a href="{{ route('company.about') }}" class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-3 px-0 border-0 border-bottom">
                                <div class="rounded-circle bg-success bg-opacity-10 p-2 text-success">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                                </div>
                                <span class="fw-semibold">About NAMTECH-HUB</span>
                            </a>
                            <a href="{{ route('company.careers') }}" class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-3 px-0 border-0 border-bottom">
                                <div class="rounded-circle bg-primary bg-opacity-10 p-2 text-primary">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                                </div>
                                <span class="fw-semibold">Careers</span>
                            </a>
                            <a href="{{ route('company.partners') }}" class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-3 px-0 border-0 border-bottom">
                                <div class="rounded-circle bg-warning bg-opacity-10 p-2 text-warning">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                </div>
                                <span class="fw-semibold">Our Partners</span>
                            </a>
                            <a href="{{ route('company.contact') }}" class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-3 px-0 border-0">
                                <div class="rounded-circle bg-info bg-opacity-10 p-2 text-info">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                                </div>
                                <span class="fw-semibold">Contact Us</span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Categories -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 animate-fade-up" style="animation-delay: 0.4s;">
                        <h5 class="fw-bold mb-4">Categories</h5>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="{{ route('blog.stories') }}" class="badge bg-light text-dark text-decoration-none px-3 py-2 rounded-pill hover-bg-dark hover-text-white transition-all">Startup Stories <span class="ms-1 text-muted">(12)</span></a>
                            <a href="{{ route('blog.tutorials') }}" class="badge bg-light text-dark text-decoration-none px-3 py-2 rounded-pill hover-bg-dark hover-text-white transition-all">Tech Tutorials <span class="ms-1 text-muted">(25)</span></a>
                            <a href="{{ route('blog.insights') }}" class="badge bg-light text-dark text-decoration-none px-3 py-2 rounded-pill hover-bg-dark hover-text-white transition-all">Industry Insights <span class="ms-1 text-muted">(18)</span></a>
                            <a href="{{ route('blog.announcements') }}" class="badge bg-light text-dark text-decoration-none px-3 py-2 rounded-pill hover-bg-dark hover-text-white transition-all">Announcements <span class="ms-1 text-muted">(8)</span></a>
                        </div>
                    </div>
                    
                    <!-- Sticky CTA -->
                    <div class="card border-0 rounded-4 p-4 text-center text-white position-relative overflow-hidden animate-pulse" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                        <div class="position-relative" style="z-index: 1;">
                            <h5 class="fw-bold mb-2">Want to contribute?</h5>
                            <p class="small opacity-75 mb-3">Share your knowledge with our community.</p>
                            <a href="#" class="btn btn-light rounded-pill px-4 fw-bold btn-glow">Become a Writer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Related Posts Section -->
        @if(count($relatedPosts) > 0)
        <div class="mt-5 pt-5">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="fw-bold">Related Articles</h3>
                <a href="{{ route('blog.latest') }}" class="btn btn-outline-success rounded-pill px-4">View All</a>
            </div>
            <div class="row g-4">
                @foreach($relatedPosts as $relatedPost)
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 hover-lift">
                        <div class="position-relative" style="height: 180px; overflow: hidden;">
                            @if($relatedPost->featured_image)
                                <img src="{{ asset($relatedPost->featured_image) }}" alt="{{ $relatedPost->title }}" class="w-100 h-100 object-fit-cover hover-zoom">
                            @else
                                <div class="w-100 h-100 bg-light d-flex align-items-center justify-content-center">
                                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="#ccc" stroke-width="1"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                                </div>
                            @endif
                            <span class="position-absolute top-0 start-0 m-3 badge bg-success">{{ $relatedPost->category }}</span>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-2 line-clamp-2" style="font-size: 1rem;">{{ $relatedPost->title }}</h5>
                            <p class="text-muted small mb-3 line-clamp-2">{{ $relatedPost->excerpt }}</p>
                            <a href="{{ route('blog.show', $relatedPost) }}" class="text-success fw-bold text-decoration-none small hover-underline">Read More →</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>

<style>
/* Animations */
@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(5deg); }
}

@keyframes fadeUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.02); }
}

@keyframes glow {
    0%, 100% { box-shadow: 0 0 5px rgba(255,255,255,0.5); }
    50% { box-shadow: 0 0 20px rgba(255,255,255,0.8), 0 0 30px rgba(255,255,255,0.6); }
}

.animate-fade-up {
    animation: fadeUp 0.6s ease-out forwards;
    opacity: 0;
}

.animate-pulse {
    animation: pulse 2s ease-in-out infinite;
}

/* Floating shapes */
.floating-shape {
    filter: blur(40px);
}

/* Breadcrumb light */
.breadcrumb-light .breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255,255,255,0.5);
}

/* Social Buttons - Sticky Left */
.social-btn {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    text-decoration: none;
    color: white;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.social-btn:hover {
    transform: translateY(-3px) scale(1.1);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

.social-twitter { background: linear-gradient(135deg, #1da1f2 0%, #0d8bd9 100%); }
.social-facebook { background: linear-gradient(135deg, #4267B2 0%, #365899 100%); }
.social-linkedin { background: linear-gradient(135deg, #0077b5 0%, #00669c 100%); }
.social-whatsapp { background: linear-gradient(135deg, #25d366 0%, #128c7e 100%); }
.social-telegram { background: linear-gradient(135deg, #0088cc 0%, #006699 100%); }
.social-copy { background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%); }

/* Social Follow Buttons - Right Sidebar */
.social-follow-btn {
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.social-follow-btn:hover {
    transform: translateX(5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.social-icon-wrapper {
    transition: transform 0.3s ease;
}

.social-follow-btn:hover .social-icon-wrapper {
    transform: rotate(360deg) scale(1.1);
}

/* Hover Effects */
.hover-lift {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.hover-lift:hover {
    transform: translateY(-8px);
    box-shadow: 0 1.5rem 3rem rgba(0,0,0,0.15) !important;
}

.hover-zoom {
    transition: transform 0.5s ease;
}

.hover-lift:hover .hover-zoom {
    transform: scale(1.08);
}

.hover-zoom-img {
    transition: transform 0.7s ease;
}

.hover-zoom-img:hover {
    transform: scale(1.05);
}

.hover-scale {
    transition: transform 0.3s ease;
}

.hover-scale:hover {
    transform: scale(1.05);
}

.hover-underline:hover {
    text-decoration: underline !important;
}

.hover-opacity-100:hover {
    opacity: 1 !important;
}

/* Text utilities */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.object-fit-cover {
    object-fit: cover;
}

.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

/* Group hover effects */
.group:hover .group-hover-scale {
    transform: scale(1.1);
}

.group:hover .group-hover-text-success {
    color: #10b981 !important;
}

.group-hover-scale {
    transition: transform 0.3s ease;
}

/* Transition utilities */
.transition-all {
    transition: all 0.3s ease;
}

.hover-bg-success:hover {
    background-color: #10b981 !important;
}

.hover-text-white:hover {
    color: white !important;
}

.hover-bg-dark:hover {
    background-color: #1f2937 !important;
}

.hover-text-success:hover {
    color: #10b981 !important;
}

/* Popular posts hover */
.popular-posts-list .group:hover img {
    transform: scale(1.1);
}

/* Glow effect for CTA button */
.btn-glow {
    animation: glow 2s ease-in-out infinite;
}

/* Blog content styling */
.blog-content h2 {
    font-size: 1.75rem;
    font-weight: 700;
    margin-top: 2rem;
    margin-bottom: 1rem;
    color: #1f2937;
}

.blog-content h3 {
    font-size: 1.4rem;
    font-weight: 600;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
    color: #374151;
}

.blog-content p {
    margin-bottom: 1.25rem;
    line-height: 1.8;
}

.blog-content blockquote {
    border-left: 4px solid #10b981;
    padding-left: 1.5rem;
    margin: 2rem 0;
    font-style: italic;
    color: #4b5563;
    background: #f9fafb;
    padding: 1.5rem;
    border-radius: 0 8px 8px 0;
}

.blog-content img {
    max-width: 100%;
    height: auto;
    border-radius: 12px;
    margin: 2rem 0;
}

.blog-content ul, .blog-content ol {
    margin-bottom: 1.25rem;
    padding-left: 1.5rem;
}

.blog-content li {
    margin-bottom: 0.5rem;
}

.blog-content a {
    color: #10b981;
    text-decoration: none;
    border-bottom: 2px solid rgba(16, 185, 129, 0.2);
    transition: all 0.3s ease;
}

.blog-content a:hover {
    border-bottom-color: #10b981;
}

/* Author avatar animation */
.author-avatar-wrapper {
    transition: transform 0.3s ease;
}

.author-avatar-wrapper:hover {
    transform: scale(1.1);
}

/* Comment styling */
.comments-list img {
    transition: transform 0.3s ease;
}

.comments-list img:hover {
    transform: scale(1.1);
}

/* Responsive adjustments */
@media (max-width: 991px) {
    .blog-hero {
        min-height: 400px !important;
    }
    
    .blog-hero h1 {
        font-size: 2rem;
    }
}

@media (max-width: 767px) {
    .blog-hero {
        min-height: 350px !important;
    }
    
    .social-follow-btn {
        padding: 0.75rem !important;
    }
}
</style>

<script>
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(function() {
        // Show toast notification
        const toast = document.createElement('div');
        toast.className = 'position-fixed bottom-0 end-0 m-4 bg-dark text-white px-4 py-3 rounded-3 shadow-lg';
        toast.style.cssText = 'z-index: 9999; animation: fadeUp 0.3s ease;';
        toast.innerHTML = '<div class="d-flex align-items-center gap-2"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Link copied to clipboard!</div>';
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transition = 'opacity 0.3s ease';
            setTimeout(() => toast.remove(), 300);
        }, 2000);
    });
}

// Add intersection observer for scroll animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

document.querySelectorAll('.animate-fade-up').forEach(el => {
    observer.observe(el);
});
</script>

@endsection
