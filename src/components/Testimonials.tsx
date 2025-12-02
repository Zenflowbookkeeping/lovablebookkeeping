import { Star } from "lucide-react";
import { Card, CardContent } from "@/components/ui/card";

const testimonials = [
  {
    name: "Sarah M.",
    role: "Small Business Owner",
    content: "Jake transformed our messy books into a clean, organized system. Now I actually understand my finances!",
    rating: 5,
  },
  {
    name: "Michael R.",
    role: "Freelance Consultant",
    content: "The monthly bookkeeping service is exactly what I needed. Professional, responsive, and accurate.",
    rating: 5,
  },
  {
    name: "Jennifer L.",
    role: "E-commerce Store Owner",
    content: "After years of dreading tax season, I finally have peace of mind knowing my books are always ready.",
    rating: 5,
  },
];

export function Testimonials() {
  return (
    <section id="testimonials" className="py-20 bg-secondary">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-4">
            Business owners who trust Wenonah Bookkeeping
          </h2>
          <p className="text-muted-foreground max-w-2xl mx-auto text-lg">
            Over 50 small business owners rely on us to keep their books accurate, tax-ready, and stress-free.
          </p>
        </div>

        <div className="grid md:grid-cols-3 gap-8">
          {testimonials.map((testimonial, index) => (
            <Card key={index} className="bg-card border-0 card-shadow hover-lift">
              <CardContent className="pt-6">
                <div className="flex gap-1 mb-4">
                  {[...Array(testimonial.rating)].map((_, i) => (
                    <Star key={i} className="w-5 h-5 fill-gold text-gold" />
                  ))}
                </div>
                <p className="text-foreground mb-6 italic">"{testimonial.content}"</p>
                <div>
                  <p className="font-semibold text-foreground">{testimonial.name}</p>
                  <p className="text-sm text-muted-foreground">{testimonial.role}</p>
                </div>
              </CardContent>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
}
