
import { useState, useEffect } from 'react';
import { MenuIcon, X } from 'lucide-react';

const Header = () => {
  const [isScrolled, setIsScrolled] = useState(false);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      const scrollPosition = window.scrollY;
      setIsScrolled(scrollPosition > 20);
    };

    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  return (
    <header
      className={`fixed top-0 left-0 right-0 w-full z-50 transition-all duration-300 ${
        isScrolled
          ? 'py-3 bg-white/95 backdrop-blur-md shadow-sm'
          : 'py-5 bg-transparent'
      }`}
    >
      <div className="container mx-auto px-4 md:px-6 flex items-center justify-between">
        <a href="#" className="flex items-center gap-2">
          <div className="h-9 w-9 rounded-full bg-Bloghub-600 flex items-center justify-center animate-pulse-soft">
            <span className="text-white font-display font-bold text-lg">S</span>
          </div>
          <span className="font-display font-semibold text-xl text-gray-900">Bloghub</span>
        </a>

        {/* Desktop Navigation */}
        <nav className="hidden md:flex items-center space-x-8">
          <a href="#features" className="text-sm font-medium text-gray-700 hover:text-Bloghub-600 transition-colors link-underline">
            Features
          </a>
          <a href="#testimonials" className="text-sm font-medium text-gray-700 hover:text-Bloghub-600 transition-colors link-underline">
            Testimonials
          </a>
          <a href="#pricing" className="text-sm font-medium text-gray-700 hover:text-Bloghub-600 transition-colors link-underline">
            Pricing
          </a>
          <a href="#blog" className="text-sm font-medium text-gray-700 hover:text-Bloghub-600 transition-colors link-underline">
            Blog
          </a>
        </nav>

        {/* CTA Buttons */}
        <div className="hidden md:flex items-center space-x-4">
          <a href="#" className="text-sm font-medium text-gray-700 hover:text-Bloghub-600">
            Sign in
          </a>
          <a href="#" className="btn-primary text-sm">
            Get Started
          </a>
        </div>

        {/* Mobile Menu Button */}
        <button
          onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
          className="md:hidden p-2 rounded-full hover:bg-gray-100 transition-colors"
          aria-label={mobileMenuOpen ? "Close menu" : "Open menu"}
        >
          {mobileMenuOpen ? (
            <X className="h-6 w-6 text-gray-700" />
          ) : (
            <MenuIcon className="h-6 w-6 text-gray-700" />
          )}
        </button>
      </div>

      {/* Mobile Menu */}
      {mobileMenuOpen && (
        <div className="md:hidden absolute top-full left-0 right-0 bg-white border-t border-gray-100 shadow-md animate-fade-in">
          <div className="container mx-auto px-4 py-4">
            <nav className="flex flex-col space-y-4">
              <a
                href="#features"
                className="px-4 py-2 text-base font-medium text-gray-700 hover:text-Bloghub-600 hover:bg-gray-50 rounded-md transition-colors"
                onClick={() => setMobileMenuOpen(false)}
              >
                Features
              </a>
              <a
                href="#testimonials"
                className="px-4 py-2 text-base font-medium text-gray-700 hover:text-Bloghub-600 hover:bg-gray-50 rounded-md transition-colors"
                onClick={() => setMobileMenuOpen(false)}
              >
                Testimonials
              </a>
              <a
                href="#pricing"
                className="px-4 py-2 text-base font-medium text-gray-700 hover:text-Bloghub-600 hover:bg-gray-50 rounded-md transition-colors"
                onClick={() => setMobileMenuOpen(false)}
              >
                Pricing
              </a>
              <a
                href="#blog"
                className="px-4 py-2 text-base font-medium text-gray-700 hover:text-Bloghub-600 hover:bg-gray-50 rounded-md transition-colors"
                onClick={() => setMobileMenuOpen(false)}
              >
                Blog
              </a>
              <div className="pt-2 border-t border-gray-100 flex flex-col space-y-3">
                <a
                  href="#"
                  className="px-4 py-2 text-base font-medium text-gray-700 hover:text-Bloghub-600 hover:bg-gray-50 rounded-md transition-colors"
                >
                  Sign in
                </a>
                <a
                  href="#"
                  className="btn-primary mx-4"
                >
                  Get Started
                </a>
              </div>
            </nav>
          </div>
        </div>
      )}
    </header>
  );
};

export default Header;
