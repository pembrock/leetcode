class Solution {
    func twoSum(_ nums: [Int], _ target: Int) -> [Int] {
        var numsHash: [Int:Int] = [:]
    
        for (index, value) in nums.enumerated() {
            if let need = numsHash[target - value] {
                return [need, index]
            }
            numsHash[value] = index
        }
        
        return []
    }
}
let nums = [2,7,11,15]
let target = 9
let solution = Solution()
print(solution.twoSum(nums, target))