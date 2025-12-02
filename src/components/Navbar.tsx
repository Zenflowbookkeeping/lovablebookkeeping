import { useState } from "react";
import { Phone, Menu, X } from "lucide-react";
import { Button } from "@/components/ui/button";

const navItems = [
  { label: "HOME", href: "#" },
  { label: "ABOUT", href: "#about" },
  { label: "SERVICES", href: "#services" },
  { label: "PRICING", href: "#pricing" },
  { label: "SERVICE AREAS", href: "#services" },
  { label: "TESTIMONIALS", href: "#testimonials" },
  { label: "BLOG", href: "#" },
  { label: "CONTACT", href: "#contact" },
];

export function Navbar() {
  const [isOpen, setIsOpen] = useState(false);

  return (
    <nav className="fixed top-0 left-0 right-0 z-50 bg-background shadow-sm">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex items-center justify-between h-16 md:h-20">
          {/* Logo */}
          <a href="#" className="flex items-center gap-2">
            <div className="flex flex-col items-center">
              <svg className="w-6 h-6 text-primary" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="currentColor" strokeWidth="2" fill="none"/>
              </svg>
              <span className="text-xs font-semibold text-primary tracking-wider">WENONAH</span>
              <span className="text-[8px] text-muted-foreground tracking-widest">BOOKKEEPING</span>
            </div>
          </a>

          {/* Desktop Navigation */}
          <div className="hidden lg:flex items-center gap-8">
            {navItems.map((item) => (
              <a
                key={item.label}
                href={item.href}
                className="text-xs font-medium text-foreground hover:text-primary transition-colors tracking-wide"
              >
                {item.label}
              </a>
            ))}
          </div>

          {/* Phone Number */}
          <a
            href="tel:610-308-2062"
            className="hidden md:flex items-center gap-2 text-primary font-semibold hover:text-primary/80 transition-colors"
          >
            <Phone className="w-4 h-4" />
            <span>610-308-2062</span>
          </a>

          {/* Mobile Menu Button */}
          <button
            onClick={() => setIsOpen(!isOpen)}
            className="lg:hidden p-2 text-foreground"
          >
            {isOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
          </button>
        </div>

        {/* Mobile Navigation */}
        {isOpen && (
          <div className="lg:hidden py-4 border-t">
            <div className="flex flex-col gap-4">
              {navItems.map((item) => (
                <a
                  key={item.label}
                  href={item.href}
                  onClick={() => setIsOpen(false)}
                  className="text-sm font-medium text-foreground hover:text-primary transition-colors"
                >
                  {item.label}
                </a>
              ))}
              <a
                href="tel:610-308-2062"
                className="flex items-center gap-2 text-primary font-semibold"
              >
                <Phone className="w-4 h-4" />
                <span>610-308-2062</span>
              </a>
            </div>
          </div>
        )}
      </div>
    </nav>
  );
}
