import { Calendar, RefreshCw, GraduationCap } from "lucide-react";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";

const services = [
  {
    icon: Calendar,
    title: "Monthly Bookkeeping",
    description: "Stay on top of your finances with a reliable monthly process that keeps your books accurate and tax-ready.",
    features: [
      "Bank & credit cards reconciled monthly",
      "Smart rules for automated categorization",
      "Financial statements delivered within 15 business days",
      "Email support for quick money questions",
      "Optional Financial Insights video (+15% of plan)",
    ],
  },
  {
    icon: RefreshCw,
    title: "Cleanup or Catch-up",
    description: "Behind on your books? We fix and organize everything fast so you can file taxes and make decisions with confidence.",
    features: [
      "Rebuild months or years of records",
      "Use advanced tools to import statements",
      "Every transaction reviewed and corrected",
      "Tax-ready handoff for your CPA",
    ],
  },
  {
    icon: GraduationCap,
    title: "Consulting & Training",
    description: "Keep bookkeeping in-house with expert setup, training, and periodic reviews to keep your team confident and accurate.",
    features: [
      "Personalized QuickBooks setup and training",
      "Chart of accounts and workflow optimization",
      "Monthly or quarterly accuracy reviews",
      "Option to upgrade to monthly service anytime",
    ],
  },
];

export function Services() {
  return (
    <section id="services" className="py-20 bg-secondary">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-16">
          <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-4">
            Our Bookkeeping Services
          </h2>
          <p className="text-muted-foreground max-w-2xl mx-auto text-lg">
            Choose the level of help you need. Whether you want to stay hands-on or hand it off completely, we've got you covered.
          </p>
        </div>

        <div className="grid md:grid-cols-3 gap-8">
          {services.map((service, index) => (
            <Card
              key={service.title}
              className="bg-card border-0 card-shadow hover-lift"
              style={{ animationDelay: `${index * 0.1}s` }}
            >
              <CardHeader>
                <CardTitle className="text-xl font-semibold text-primary">
                  {service.title}
                </CardTitle>
                <p className="text-muted-foreground text-sm mt-2">
                  {service.description}
                </p>
              </CardHeader>
              <CardContent>
                <ul className="space-y-3">
                  {service.features.map((feature, i) => (
                    <li key={i} className="flex items-start gap-2 text-sm text-foreground">
                      <span className="text-primary mt-1">•</span>
                      <span>{feature}</span>
                    </li>
                  ))}
                </ul>
              </CardContent>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
}
