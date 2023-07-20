std::string to_roman(int value)
{
   std::vector<std::pair<int, char const*>> roman
   {
      { 1000, "M" },{ 900, "CM" },
      { 500, "D" },{ 400, "CD" },
      { 100, "C" },{ 90, "XC" },
      { 50, "L" },{ 40, "XL" },
      { 10, "X" },{ 9, "IX" },
      { 5, "V" },{ 4, "IV" },
      { 1, "I" }
   };
 
   std::string result;
   for (auto const & [d, r]: roman)
   {
      while (value >= d)
      {
     	result += r;
     	value -= d;
      }
   }
 
   return result;
}
 
std::vector<int> v{1,1,2,3,5,8,13,21,34};
