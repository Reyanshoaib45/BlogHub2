
import React, { useState, useEffect } from 'react';
import { ArrowLeft, ArrowRight, Star } from 'lucide-react';

const testimonials = [
  {
    id: 1,
    content: "Bloghub has transformed how our team collaborates. The intuitive interface and powerful features have boosted our productivity by at least 40%.",
    author: "Sarah Johnson",
    role: "Product Manager",
    company: "Acme Corp",
    avatar: "https://randomuser.me/api/portraits/women/32.jpg"
  },
  {
    id: 2,
    content: "I've tried many productivity tools, but Bloghub stands out with its AI capabilities. It's like having an extra team member who handles all the tedious tasks.",
    author: "David Chen",
    role: "CTO",
    company: "TechNova",
    avatar: "https://randomuser.me/api/portraits/men/54.jpg"
  },
  {
    id: 3,
    content: "The analytics dashboard gives us incredible insights that have helped us optimize our workflow. Our team is more aligned and efficient than ever.",
    author: "Emily Rodriguez",
    role: "Operations Director",
    company: "GrowthLabs",
    avatar: "https://randomuser.me/api/portraits/women/17.jpg"
  }
];

const TestimonialsSection = () => {
  const [activeIndex, setActiveIndex] = useState(0);
  const [animating, setAnimating] = useState(false);
  const [slideDirection, setSlideDirection] = useState('');

  useEffect(() => {
    // Auto-rotate testimonials every 5 seconds
    const interval = setInterval(() => {
      nextTestimonial();
    }, 5000);

    return () => clearInterval(interval);
  }, [activeIndex]);

  const nextTestimonial = () => {
    if (animating) return;

    setSlideDirection('slide-left');
    setAnimating(true);

    setTimeout(() => {
      setActiveIndex((prev) => (prev === testimonials.length - 1 ? 0 : prev + 1));
      setAnimating(false);
    }, 300);
  };

  const prevTestimonial = () => {
    if (animating) return;

    setSlideDirection('slide-right');
    setAnimating(true);

    setTimeout(() => {
      setActiveIndex((prev) => (prev === 0 ? testimonials.length - 1 : prev - 1));
      setAnimating(false);
    }, 300);
  };

  return (
    <section id="testimonials" className="section-padding bg-Bloghub-50">
      <div className="container mx-auto px-4 md:px-6">
        {/* Section Header */}
        <div className="text-center max-w-3xl mx-auto mb-16 animate-fade-in">
          <h2 className="text-3xl md:text-4xl font-display font-bold text-gray-900 mb-4">
            Trusted by Thousands of Teams
          </h2>
          <p className="text-xl text-gray-600 text-balance">
            Don't just take our word for it — hear what our customers have to say about Bloghub.
          </p>
        </div>

        {/* Testimonials Carousel */}
        <div className="max-w-4xl mx-auto relative">
          {/* Testimonial Card */}
          <div
            className={`bg-white rounded-2xl shadow-soft border border-gray-100 p-8 md:p-10 transition-all duration-300 ${
              slideDirection === 'slide-left' ? 'animate-slide-left' :
              slideDirection === 'slide-right' ? 'animate-slide-right' :
              'animate-scale-in'
            }`}
          >
            <div className="flex items-center mb-6">
              {[...Array(5)].map((_, i) => (
                <Star key={i} className="h-5 w-5 text-yellow-400 fill-yellow-400" />
              ))}
            </div>

            <blockquote className="text-xl md:text-2xl text-gray-700 font-medium mb-8 text-balance">
              "{testimonials[activeIndex].content}"
            </blockquote>

            <div className="flex items-center">
              <img
                src={testimonials[activeIndex].avatar}
                alt={testimonials[activeIndex].author}
                className="h-12 w-12 rounded-full object-cover mr-4 animate-fade-in"
                loading="lazy"
              />
              <div className="animate-fade-in delay-100">
                <p className="font-semibold text-gray-900">{testimonials[activeIndex].author}</p>
                <p className="text-sm text-gray-600">{testimonials[activeIndex].role}, {testimonials[activeIndex].company}</p>
              </div>
            </div>
          </div>

          {/* Navigation Controls */}
          <div className="flex justify-center items-center mt-8 space-x-4">
            <button
              onClick={prevTestimonial}
              className="p-2 rounded-full bg-white border border-gray-200 text-gray-700 hover:bg-Bloghub-50 hover:text-Bloghub-600 transition-colors transform hover:scale-110 duration-200"
              aria-label="Previous testimonial"
            >
              <ArrowLeft className="h-5 w-5" />
            </button>

            {/* Dots */}
            <div className="flex space-x-2">
              {testimonials.map((_, index) => (
                <button
                  key={index}
                  onClick={() => {
                    if (index > activeIndex) {
                      setSlideDirection('slide-left');
                    } else if (index < activeIndex) {
                      setSlideDirection('slide-right');
                    }
                    setActiveIndex(index);
                  }}
                  className={`h-2.5 rounded-full transition-all ${
                    index === activeIndex
                      ? 'w-8 bg-Bloghub-600 animate-pulse'
                      : 'w-2.5 bg-gray-300 hover:bg-gray-400'
                  }`}
                  aria-label={`Go to testimonial ${index + 1}`}
                ></button>
              ))}
            </div>

            <button
              onClick={nextTestimonial}
              className="p-2 rounded-full bg-white border border-gray-200 text-gray-700 hover:bg-Bloghub-50 hover:text-Bloghub-600 transition-colors transform hover:scale-110 duration-200"
              aria-label="Next testimonial"
            >
              <ArrowRight className="h-5 w-5" />
            </button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default TestimonialsSection;
